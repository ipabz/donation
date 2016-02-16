@extends('layouts.master')

@section('headAddOns')

@stop

@section('content')
<header>

</header>

<main role="main">

<section id="donatenow">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-left">
                <div class="row donationheader">
					<h1>Midamerica Prison Ministry</h1>
				</div>
                
                <br />
            
				<h3>Thank You For Your Donation!</h3>
                
                <br />
                
                <p>We are proud of the services we provide in and for Tulsa, America’s Most Generous City®, and the many other communities supported by the recommendations of our donors.</p>

                <p>Please contact us if we can help you in any way.</p>
                
                <br />
                
                <a href="/" class="btn btn-lg btn-primary">Go to Homepage</a>
			</div>
		</div>
	</div>
</section>

<footer>

</footer>
@section('footAddOns')
<script>
function changedFund() {
	if ($('#fundselect').val() != 'default') {
		$('.donationfields').removeClass('hidden');
	}
	else {
		$('.donationfields').addClass('hidden');
	}
}
$(function() {

	$('.donationpad label').on('click', function(e) {
		e.preventDefault();
		$('.donationpad label').removeClass('selected').find('.radiobtn').prop('checked', false);
		if (!$(this).hasClass('selected')) {
			$(this).addClass('selected').find('.radiobtn').prop('checked', true);
		}

		if ($('#donationamount_other').parent().hasClass('selected')) {
			$('#donationamount_otherinput').removeClass('hidden').find('input').focus();
		}
		else {
			$('#donationamount_otherinput').addClass('hidden');
		}
	});

	$('.donationopt label').on('click', function(e) {
		e.preventDefault();
		$('.donationopt label').removeClass('selected').find('.radiobtn').prop('checked', false);
		if (!$(this).hasClass('selected')) {
			$(this).addClass('selected').find('.radiobtn').prop('checked', true);
		}
	});

	$('#addinfo').on('click', function() {
		if ($(this).prop('checked')) {
			$('#addinfotext').removeClass('hidden').find('textarea').focus();
		}
		else {
			$('#addinfotext').addClass('hidden').find('textarea').click();
		}
	});

	$('#covercc').on('click', function() {
		if ($(this).prop('checked')) {
			$('#covercctext').removeClass('hidden');
		}
		else {
			$('#covercctext').addClass('hidden');
		}
	});
 

});
</script>
@stop
@stop