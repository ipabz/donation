<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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


}
