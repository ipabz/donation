@extends('layouts.master')

@section('headAddOns')

@stop

@section('content')
<header>

</header>

<main role="main">

<form action="{{ route('donation.submit') }}" method="POST" id="payment-form">
<input type="hidden" name="organization_id" value="1" />
<section id="donatenow">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="row donationheader">
					<h1>Donate to Midamerica Prison Ministry</h1>
				</div>

					<div class="row donationfund">
					</div>
					<div class="donationfields clearfix">

						<div class="row donationopt">
							<div class="col-xs-6">
								<label for="donationopt_onetime" class="selected">
									<input class="radiobtn" checked="" type="radio" name="recurring_period" value="onetime" id="donationopt_onetime" autocomplete="off" />
									<span>One Time</span>
								</label>
							</div>
							<div class="col-xs-6">
								<label for="donationopt_monthly">
									<input class="radiobtn" type="radio" name="recurring_period" value="monthly" id="donationopt_monthly" autocomplete="off" />
									<span>Monthly</span>
								</label>
							</div>
						</div>

						<div class="row donationpad">
							<div class="col-xs-3">
								<label for="donationamount_20">
									<input class="radiobtn" type="radio" name="amount" value="20" id="donationamount_20" autocomplete="off" />
									<span>$20</span>
								</label>
							</div>
							<div class="col-xs-3">
								<label for="donationamount_50">
									<input class="radiobtn" type="radio" name="amount" value="50" id="donationamount_50" autocomplete="off" />
									<span>$50</span>
								</label>
							</div>
							<div class="col-xs-3">
								<label for="donationamount_100">
									<input class="radiobtn" type="radio" name="amount" value="100" id="donationamount_100" autocomplete="off" />
									<span>$100</span>
								</label>
							</div>
							<div class="col-xs-3">
								<label for="donationamount_500">
									<input class="radiobtn" type="radio" name="amount" value="500" id="donationamount_500" autocomplete="off" />
									<span>$500</span>
								</label>
							</div>


							<div class="col-xs-3">
								<label for="donationamount_1000">
									<input class="radiobtn" type="radio" name="amount" value="1000" id="donationamount_1000" autocomplete="off" />
									<span>$1k</span>
								</label>
							</div>
							<div class="col-xs-3">
								<label for="donationamount_5000">
									<input class="radiobtn" type="radio" name="amount" value="5000" id="donationamount_5000" autocomplete="off" />
									<span>$5k</span>
								</label>
							</div>
							<div class="col-xs-3">
								<label for="donationamount_10000">
									<input class="radiobtn" type="radio" name="amount" value="10000" id="donationamount_10000" autocomplete="off" />
									<span>$10k</span>
								</label>
							</div>
							<div class="col-xs-3">
								<label for="donationamount_other">
									<input class="radiobtn" type="radio" name="amount" value="other" id="donationamount_other" autocomplete="off" />
									<span>Other</span>
								</label>
							</div>

							<div id="donationamount_otherinput" class="col-xs-12 hidden">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon" for="coverccfee">$</div>
										<input type="text" class="form-control" name="otheramount" id="otheramount" placeholder="" />
									</div>
								</div>
							</div>


						</div>

						<div class="row donationaddinfo">
							<div class="col-xs-12">
								<div class="checkbox">
									<label for="addinfo">
										<input type="checkbox" name="donationaddinfo" id="addinfo" /> Add additional information
									</label>
								</div>
								<div id="addinfotext" class="form-group hidden">
									<textarea class="form-control" name="note" rows="4"></textarea>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="donationaddinfo_covercc" id="covercc" /> I will cover the credit card processing fee
									</label>
								</div>
								<div id="covercctext" class="hidden">

									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon" for="coverccfee">Fee Amount</div>
											<input type="text" class="form-control" id="coverccfee" placeholder="Amount" value="000.00" disabled />
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon" for="covercctotal">Total Donation</div>
											<input type="text" class="form-control" id="covercctotal" placeholder="Amount" value="0000.00" disabled />
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>

					<div class="row donationsubmit">
						<div class="col-xs-12">
							<input type="button" name="name" class="btn btn-lg btn-primary" value="Donate" data-toggle="modal" data-target="#myModal"/>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>

 
<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
 
		  <span class="payment-errors"></span>

		  <div class="form-row">
		    <label>
		      <span>Email</span>
		      <input type="text" size="20" name="email" />
		    </label>
		  </div>

		  <div class="form-row">
		    <label>
		      <span>Name</span>
		      <input type="text" size="20" name="name" />
		    </label>
		  </div>

		  <div class="form-row">
		    <label>
		      <span>Address</span>
		      <input type="text" size="20" name="address" />
		    </label>
		  </div>

		  <div class="form-row">
		    <label>
		      <span>Post Code</span>
		      <input type="text" size="20" name="zipcode" />
		    </label>
		  </div>

		  <div class="form-row">
		    <label>
		      <span>City</span>
		      <input type="text" size="20" name="city" />
		    </label>
		  </div>

		  <div class="form-row">
		    <label>
		      <span>Card Number</span>
		      <input type="text" size="20" data-stripe="number" name="card_number" />
		    </label>
		  </div>

		  <div class="form-row">
		    <label>
		      <span>CVC</span>
		      <input type="text" size="4" data-stripe="cvc" name="cvv" />
		    </label>
		  </div>

		  <div class="form-row">
		    <label>
		      <span>Expiration (MM/YYYY)</span>
		      <input type="text" size="2" data-stripe="exp-month" name="exp_month" maxlength="2" />
		    </label>
		    <span> / </span>
		    <input type="text" size="4" data-stripe="exp-year" name="exp_year" maxlength="4" />
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>
</form>

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
		calculate();
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

		calculate();
	});

	$('#donationamount_otheramount').keyup(function() {
		calculate();
	});

	function calculate()
	{
		var val = $('input:radio[name=donationamount]:checked').val();

		if (val === '') {			
			val = $('#donationamount_otheramount').val();
		} 

		var feeAmount = (Number(val) * 0.03) + 0.3;
		var totalAmount = Number(val) + feeAmount;

		$('#coverccfee').val(feeAmount.toFixed(2));
		$('#covercctotal').val(totalAmount.toFixed(2));
	}
 

});
</script>
@stop
@stop