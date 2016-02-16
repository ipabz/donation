<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
   	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['recurring_period','amount','repeat_date','repeat_until','status'];
}
