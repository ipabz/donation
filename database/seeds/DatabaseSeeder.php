<?php

use Illuminate\Database\Seeder;
use App\Organization;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrganizationTableSeeder::class);
    }
}

class OrganizationTableSeeder extends Seeder 
{
	public function run() 
	{
		DB::table('organizations')->truncate();

		$organization = [
			'name' => 'Midamerica Prison Ministry',
			'email' => '',
			'description' => '',
			'address' => '',
			'city' => '',
			'state' => '',
			'zipcode' => ''
		];

		Organization::create($organization);
	}
}
