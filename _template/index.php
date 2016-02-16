<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="text/html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Tulsa Community Foundation</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/custom.css" rel="stylesheet" />
	<link href="assets/css/rwd.css" rel="stylesheet" />

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,900' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>
<body>

<header>

</header>

<main role="main">

<section id="donatenow">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="row donationheader">
					<h1>Donate to the TCF fund you wish to support</h1>
				</div>

				<div class="row donationfund">
					<div class="col-xs-12">
						<select id="fundselect" name="fund_name" class="form-control" onchange="changedFund()" labelclass="input select fund-label">
							<option value="default">Please select a fund</option>
							<option value="13">36degreesNorth Fund</option>
							<option value="14">AMC Cares Fund</option>
							<option value="15">Arts Alliance Tulsa Fund</option>
							<option value="94">Bama Foundation Fund</option>
							<option value="18">Blue Bear Employee Relief Fund</option>
							<option value="19">Cameron Classic Event Fund</option>
							<option value="20">Carnegie Elementary Rise to Excellence Fund</option>
							<option value="21">Cherry Street Farmers Market Double-Up Food Fund</option>
							<option value="22">Cuba Wadlington, Jr. and Michael P. Johnson Scholarship Fund</option>
							<option value="23">East Village District Association Fund</option>
							<option value="24">Eisenhower International School Foundation Fund</option>
							<option value="25">Festival Americas Scholarship Fund</option>
							<option value="26">Friends for Folks Fund</option>
							<option value="27">Friendship is Essential to the Soul (FIETTS) Fund</option>
							<option value="28">Funders Roundtable Fund</option>
							<option value="29">GO for Catholic Schools Scholarship Fund</option>
							<option value="30">Greater Tulsa Fund</option>
							<option value="31">Healthy Community Store Initiative Fund</option>
							<option value="32">Jack Wing Memorial Scholarship Fund</option>
							<option value="33">KIPP Tulsa Reserve Fund</option>
							<option value="34">Lauren Crawley Memorial Scholarship Fund</option>
							<option value="36">Million Reasons Why Fund</option>
							<option value="35">MVP Fund</option>
							<option value="83">National Taekwondo Athlete Development Fund</option>
							<option value="37">Nature Conservancy of Oklahoma Fund</option>
							<option value="38">Panny McElroy Distributor Scholarship Fund</option>
							<option value="39">Park Friends - Cousins Park Fund</option>
							<option value="40">Park Friends - Henthorne Performing Arts Center Fund</option>
							<option value="41">Park Friends - LaFortune Tennis Fund</option>
							<option value="42">Park Friends - Tree For All Endowment Fund</option>
							<option value="43">Park Friends - Tulsa County Parks Special Events Fund</option>
							<option value="44">Project Special Courage Fund</option>
							<option value="45">REALITY Outside Fund</option>
							<option value="85">Rocky Goins &amp; Lynn Flinn Foundation Fund</option>
							<option value="46">Route 66 Alliance Fund</option>
							<option value="48">Sigma Pi Phi Epsilon Iota Boule Scholarship Fund</option>
							<option value="47">Sigma Pi Phi, Epsilon Iota Community Investment Fund</option>
							<option value="49">Spotlight Theater Improvement Fund</option>
							<option value="50">Summer Leadership Academy Fund</option>
							<option value="51">Supplied for Success Fund</option>
							<option value="120">TABERC</option>
							<option value="53">Taekwondo Athlete Fund</option>
							<option value="54">Terry Hessong Memorial Scholarship Fund</option>
							<option value="95">The Champ Foundation Fund</option>
							<option value="97">The Cross Worldwide Fund</option>
							<option value="52">TPD Foundation Fund</option>
							<option value="55">Trinity Villa Capital Fund</option>
							<option value="56">Tuesday Morning Miracle Workers Fund</option>
							<option value="111">Tulsa Beautification Foundation</option>
							<option value="58">Tulsa Fire Museum Building Fund</option>
							<option value="59">Tulsa Hills Youth Ranch Foundation Fund</option>
							<option value="93">Tulsa Literary Coalition</option>
							<option value="60">Tulsa Police Heroes Fund</option>
							<option value="61">Tulsa Sponsoring Committee Inc. Fund</option>
							<option value="62">Tulsa Tough Community Fund</option>
							<option value="63">Tulsa Urban Wilderness Fund</option>
							<option value="96">TYPro's Foundation</option>
							<option value="64">Williams Disaster Relief Fund</option>
							<option value="65">Women Impacting Tulsa Fund</option>
						</select>
					</div>
				</div>

				<div class="donationfields clearfix hidden">

					<div class="row donationopt">
						<div class="col-xs-6">
							<label for="donationopt_onetime">
								<input class="radiobtn" type="radio" name="donationopt" value="onetime" id="donationopt_onetime" autocomplete="off" />
								<span>One Time</span>
							</label>
						</div>
						<div class="col-xs-6">
							<label for="donationopt_monthly">
								<input class="radiobtn" type="radio" name="donationopt" value="monthly" id="donationopt_monthly" autocomplete="off" />
								<span>Monthly</span>
							</label>
						</div>
					</div>

					<div class="row donationpad">
						<div class="col-xs-3">
							<label for="donationamount_20">
								<input class="radiobtn" type="radio" name="donationamount" value="20" id="donationamount_20" autocomplete="off" />
								<span>$20</span>
							</label>
						</div>
						<div class="col-xs-3">
							<label for="donationamount_50">
								<input class="radiobtn" type="radio" name="donationamount" value="50" id="donationamount_50" autocomplete="off" />
								<span>$50</span>
							</label>
						</div>
						<div class="col-xs-3">
							<label for="donationamount_100">
								<input class="radiobtn" type="radio" name="donationamount" value="100" id="donationamount_100" autocomplete="off" />
								<span>$100</span>
							</label>
						</div>
						<div class="col-xs-3">
							<label for="donationamount_500">
								<input class="radiobtn" type="radio" name="donationamount" value="500" id="donationamount_500" autocomplete="off" />
								<span>$500</span>
							</label>
						</div>


						<div class="col-xs-3">
							<label for="donationamount_1000">
								<input class="radiobtn" type="radio" name="donationamount" value="1000" id="donationamount_1000" autocomplete="off" />
								<span>$1k</span>
							</label>
						</div>
						<div class="col-xs-3">
							<label for="donationamount_5000">
								<input class="radiobtn" type="radio" name="donationamount" value="5000" id="donationamount_5000" autocomplete="off" />
								<span>$5k</span>
							</label>
						</div>
						<div class="col-xs-3">
							<label for="donationamount_10000">
								<input class="radiobtn" type="radio" name="donationamount" value="10000" id="donationamount_10000" autocomplete="off" />
								<span>$10k</span>
							</label>
						</div>
						<div class="col-xs-3">
							<label for="donationamount_other">
								<input class="radiobtn" type="radio" name="donationamount" value="" id="donationamount_other" autocomplete="off" />
								<span>Other</span>
							</label>
						</div>

						<div id="donationamount_otherinput" class="col-xs-12 hidden">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon" for="coverccfee">$</div>
									<input type="text" class="form-control" id="donationamount_otheramount" placeholder="" />
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
								<textarea class="form-control" name="" rows="4"></textarea>
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
						<input type="submit" name="name" class="btn btn-lg btn-primary" value="Donate" />
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

</main>

<footer>

</footer>

<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

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

</body>
</html>
