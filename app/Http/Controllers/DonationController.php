<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Frequency;
use App\Donation;

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
		$recurring = Frequency::where('status', 1)
							  ->where('repeat_date', Carbon::now()->format('Y-m-d'))
							  ->join('donations', 'donations.frequency_id', '=', 'frequencies.id')
							  ->groupBy('frequencies.id')
							  ->get();

		foreach($recurring as $r) {
			// donation entry here.
			// update repeat_date field of frequencies table
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
