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
		$amount = $amount + (($amount * 0.03) + 0.3);
	}

	\Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

	$card = [
		'number' => $cardNumber, 
		'exp_month' => $expMonth, 
		'exp_year' => $expYear
	];

	try {

		$charge = \Stripe\Charge::create([
			'card' => $card, 
			'amount' => $amount, 
			'currency' => $currency,
			'description' => $description,
			'metadata' => $metaData
		]);

	} catch(Exception $e) {
		return $e->getMessage();
	}


	return $charge->paid;

}

function getDonorByEmail($email) {

    $donor = \App\Donor::where('email', '=', $email)->first();
    if ($donor) {
        return $donor;
    }
    return '';
}
function getCcByCardNumber($cardNumber) {

    $cc = \App\CreditCard::where('card_number', '=', $cardNumber)->first();
    if ($cc) {
        return $cc;
    }
    return '';
}