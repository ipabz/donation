<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Donor;
use App\Donation;
use App\Frequency;
use App\Organization;
use App\CreditCard;

use Carbon\Carbon;

use DB, Session;

class DonationController extends Controller
{
     /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Request $request)
	{
		//$this->middleware('auth');
        $this->request = $request;
	}

	/**
	 * redirect to application dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
	   $vars = ['message' => Session::get('message')];
       return view('pages.home', $vars);
	}


	/**
	 * Handle Recurring Donations
	 * 
	 * @return void
	 */
	public function recurringDonations()
	{
		$recurring = Frequency::select(DB::raw("donations.*, frequencies.repeat_date, frequencies.status"))
							  ->where('status', 1)
							  ->where('repeat_date', Carbon::now()->format('Y-m-d'))
							  ->join('donations', 'donations.frequency_id', '=', 'frequencies.id')
							  ->groupBy('frequencies.id')
							  ->get();

		foreach($recurring as $r) {

			$donationData = [
				'donor_id' => $r->donor_id,
				'credit_card_id' => $r->credit_card_id,
				'organization_id' => $r->organization_id,
				'amount' => $r->amount,
				'note' => $r->note,
				'recur' => 1,
				'frequency_id' => $r->frequency_id,
				'cover_processing_fee' => $r->cover_processing_fee
			];

			Donation::create( $donationData );

			$date = new Carbon();
			$r->repeat_date = $date->addMonths(1);
			$r->save();

			// add charge here
		}

	}


	public function chargeTest()
	{
		$desc = "Donation From Ivan";
		$metaData = [
			'Organization' => 'Midamerica Prison MInistry',
			'Donor Name' => 'Ivan Clint A. Pabelona',
			'Address' => 'Tampi, San Jose, 6202, Negros Oriental, Philippines'
		];

		var_dump(charge('4242424242424242', 5, 2017, 50, $desc, false, $metaData));
	}

	public function checkIfDonatorExist($email)
    {
        $result = Donor::where('email','=',$email)->count();
        if($result)
            return true;
        else
            return false;
    }

    public function checkIfCcExist($cardNumber)
    {
        $result = CreditCard::where('card_number','=',$cardNumber)->count();
        if($result)
            return true;
        else
            return false;
    }

	public function postSubmitDonation()
	{

		if($this->checkIfDonatorExist($this->request->input('email'))) {
			$donor = getDonorByEmail($this->request->input('email'));
		}
		else {
			$donor = Donor::create([
	        	'name' => $this->request->input('name'),
	        	'email' => $this->request->input('email'),
	        	'address' => $this->request->input('address'),
	        	'city' => $this->request->input('city'),
	        	'state' => $this->request->input('state'),
	        	'zipcode' => $this->request->input('zipcode'),
	        	'country' => $this->request->input('country')
	        ]);
		}

		if($this->checkIfCcExist($this->request->input('card_number'))) {
			$cc = getCcByCardNumber($this->request->input('card_number'));
		}
		else {
			$cc = CreditCard::create([
	        	'donor_id' => $donor->id,
	        	'card_type' => $this->request->input('card_type'),
	        	'card_number' => $this->request->input('card_number'),
	        	'exp_date' => $this->request->input('exp_year').'-'.$this->request->input('exp_month').'-1',
	        	'cvv' => $this->request->input('cvv')
	        ]);
		}

		$amount = $this->request->input('amount');

		if($this->request->input('amount') === 'other') {
			$amount = $this->request->input('otheramount');
		}

        $frequency_id = null;
        $recur = 0;

        if($this->request->input('recurring_period') == 'monthly') {
        	$frequency = Frequency::create([
	        	'recurring_period' => $this->request->input('recurring_period'),
	        	'amount' => $amount,
	        	'repeat_date' => Carbon::now()->addMonth()->format('Y-m-d'),
	        	'repeat_until' => null
	        ]);

	        $frequency_id = $frequency->id;
	        $recur = 1;
        }

        $donation = Donation::create([
        	'donor_id' => $donor->id,
        	'credit_card_id' => $cc->id,
        	'organization_id' => $this->request->input('organization_id'),
        	'amount' => $amount,
        	'note' => $this->request->input('note'),
        	'recur' => $recur,
        	'frequency_id' => $frequency_id,
        	'cover_processing_fee' => $this->request->has('donationaddinfo_covercc')?'yes':'no'
        ]);


        $desc = "Donation From " . $this->request->input('name');
        $coverFee = $this->request->has('donationaddinfo_covercc') ? true:false;

		$metaData = [
			'Organization' => 'Midamerica Prison MInistry',
			'Donor Name' => $this->request->input('name'),
			'Address' => $this->request->input('address') . ', ' . $this->request->input('city') . ', ' . $this->request->input('state') . ' ' . $this->request->input('zipcode') . ', ' . $this->request->input('country')
		];

		$c = charge($this->request->input('card_number'), $this->request->input('exp_month'), $this->request->input('exp_year'), $amount, $desc, $coverFee, $metaData);

		if ($c !== TRUE) {			
			return redirect( route('home') )->withMessage($c);
		}

        return redirect()->route('donation.thankyou');

	}

	public function thankyou()
	{
	   $vars = [];
       return view('pages.thankyou', $vars);
	}
}
