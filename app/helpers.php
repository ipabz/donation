<?php

/**
 * Charge Card
 * 
 * @return bool
 */
function charge($cardNumber, $expMonth, $expYear, $amount, $description, $coverProcessingFee=false, $metaData=[], $currency="usd")
{
	$amount = $amount * 100;

	if ( $coverProcessingFee ) {
		$amount = ($amount * 0.029) + 0.3;
	}

	\Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

	$card = [
		'number' => $cardNumber, 
		'exp_month' => $expMonth, 
		'exp_year' => $expYear
	];

	$charge = \Stripe\Charge::create([
		'card' => $card, 
		'amount' => $amount, 
		'currency' => $currency,
		'description' => $description,
		'metadata' => $metaData
	]);

	return $charge->paid;

}