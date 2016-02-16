<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $fillable = ['donor_id', 'credit_card_id', 'organization_id', 'amount', 'note', 'recur', 'frequency_id', 'cover_processing_fee'];

}
