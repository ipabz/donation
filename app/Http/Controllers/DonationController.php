<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Frequency;
use App\Donation;
use DB;

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
	   $vars = [];
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

	public function thankyou()
	{
	   $vars = [];
       return view('pages.thankyou', $vars);
	}
}
