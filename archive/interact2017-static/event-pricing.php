<?php
<<<<<<< HEAD:registration.php
$pageTitle = "Registration";
$pageDesc = "Registration details and other information about attending the conference.";
$pagePreviewImage = 'img/registration_preview.jpg';
=======
$pageTitle = "Pricing & Policies";
$pageDesc = "Pricing & Policy details and other information about attending the conference.";

>>>>>>> master:event-pricing.php
include( "header.php" );
include( "pricing.php" );

$superEarlyCount = 0;
$developingCountyDiscountCount = 0;

$config = parse_ini_file("db-credentials.ini");
$conn = new mysqli($config["host"],$config["user"],$config["pass"],$config["db"]);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT earlyBird,developingCountry FROM discount_count";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $superEarlyCount = $row["earlyBird"];
				$developingCountyDiscountCount = $row["developingCountry"];
    }
} else {
    echo "0 results";
}

$conn->close();

?>







<div class="content wrapper narrow">
	<article>
		<h2>
			<?php echo $pageTitle ?>
		</h2>
		<h3>Delegate Fees</h3>
		<section>
			<div class="pricing-controls">


				<div class="pricing-radio">
					<label id="normal-pricing-label">
		    	<input name="pricing-radio-group" type="radio" id="normal-pricing-radio" value="developing" checked="checked">
		    &nbsp; Normal Pricing</label>

				<?php
							if ($developingCountyDiscountCount != 0) {
								echo '<label><input type="radio" name="pricing-radio-group" value="normal" id="developing-pricing-radio"> &nbsp; Discounted Pricing for Developing Countries (<a href="#" data-toggle="modal" data-target="#country-details" class="">Details</a>) -  <span style="color:#f6901e;">' . $developingCountyDiscountCount . ' TICKETS LEFT </span> </label>';
							}
				?>

				</div>


				<div class="currency-buttons">
					<ul>
						<li id="show-inr" title="Indian Rupee" class="active show-inr">&#8377;</li
						><li id="show-usd" class="show-usd" title="US Dollar">$</li
						><li id="show-euro" class="show-euro" title="Euro">&#8364;</li>
					</ul>
				</div>
			</div>




			<div class="modal fade" id="country-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

							<h4 class="modal-title" id="myModalLabel">Discount for Developing Countries</h4>
						</div>
						<div class="modal-body">
							<p>To encourage participants from developing countries, 100 participants from developing countries will be given an additional discount of <span class="bold">
                    <span class="inr">&#8377;<?php echo $developingCountryDiscount ?></span>


			<span class="usd">$<?php echo $developingCountryDiscountUSD ?></span>
			<span class="euro">&#8364;<?php echo $developingCountryDiscountEuro ?></span>
			</span>
			on Full Conference registrations.</p>
<<<<<<< HEAD:registration.php
			
			 <div class="info grey">Status: <?php echo $developingTicketsLeft ?> of 100 Passes Left</div>
			   <p>These will be on a first-come-first-served basis and applicable at the time as per the <a href="http://www.un.org/en/development/desa/policy/wesp/wesp_current/2012country_class.pdf" target="_blank">UN DESA Country Classification Index</a>. 
=======

<!--			 <div class="info green">Status: <?php $developingTicketsLeft ?> of 100 Passes Left</div>-->
			   <p>These will be on a first-come-first-served basis and applicable at the time as per the <a href="http://www.un.org/en/development/desa/policy/wesp/wesp_current/2012country_class.pdf" target="_blank">UN DESA Country Classification Index</a>.
>>>>>>> master:event-pricing.php
		</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!--
			<p class="currency-line">Show Pricing in
				<select id="currencyChange">
					<option selected value="1">Indian Rupee (INR)</option>
					<option value="2">US Dollar</option>
					<option value="3">Euro</option>
				</select>
			</p>
-->
			<div class="price-table">
				<div class="price-slab">
					<div class="left">
						<h4>
							<?php echo $earlyPlanName ?>
						</h4>
						<p class="add-info"> <?php echo $superEarlyCount . ' Tickets Left!'  ?>
							<span class="bold">
							Only <?php echo $earlyTicketsLeft ?> Tickets Left.
							</span>
						</p>
						<p class="date">No cancellation allowed. Opens Soon.
							<!--Closes on March 1, 2017-->
						</p>
					</div>
					<div class="right">
						<div class="price-cube"><span class="price">
							<span class="inr normal"><span class="price-symbol">&#8377;</span>




							<?php echo number_format($earlyPriceFullConf) ?>
							</span>
							<span class="inr developing"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($earlyPriceFullConfDeveloping) ?>
							</span>
							<span class="usd normal"><span class="price-symbol">$</span>
							<?php echo $earlyPriceFullConfUSD ?>
							</span>
							<span class="usd developing"><span class="price-symbol">$</span>
							<?php echo number_format($earlyPriceFullConfDevelopingUSD) ?>
							</span>
							<span class="euro normal"><span class="price-symbol">&#8364;</span>
							<?php echo $earlyPriceFullConfEuro ?> </span>

							<span class="euro developing"><span class="price-symbol">&#8364;</span>
							<?php echo number_format($earlyPriceFullConfDevelopingEuro) ?>
							</span>
							</span>
							<span class="category">Full Conference</span>
							<a href="attendee/login" class="register register-open">Register</a>
						</div>
					</div>
				</div>
				<div class="price-slab">
					<div class="left">
						<h4>
							<?php echo $generalPlanName ?>
						</h4>
						<p class="date">Opens March 2. Closes on July 1, 2017</p>
					</div>
					<div class="right">
						<div class="price-cube"><span class="price">
							<span class="inr normal"><span class="price-symbol">&#8377;</span>




							<?php echo number_format($generalPriceFullConf) ?>
							</span>
							<span class="inr developing"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($generalPriceFullConfDeveloping) ?>
							</span>
							<span class="usd normal"><span class="price-symbol">$</span>
							<?php echo $generalPriceFullConfUSD ?>
							</span>
							<span class="usd developing"><span class="price-symbol">$</span>
							<?php echo $generalPriceFullConfDevelopingUSD ?>
							</span>
							<span class="euro normal"><span class="price-symbol">&#8364;</span>
							<?php echo $generalPriceFullConfEuro ?>
							</span>
							<span class="euro developing"><span class="price-symbol">&#8364;</span>
							<?php echo $generalPriceFullConfDevelopingEuro ?>
							</span>
							</span>
							<span class="category">Full Conference</span>
							<a href="#" class="register not-open">Not Open</a>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>




							<?php echo number_format($generalPriceOneDay) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $generalPriceOneDayUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $generalPriceOneDayEuro ?>
							</span>
							</span>
							<span class="category">One Day</span>
							<a href="#" class="register not-open">Not Open</a>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>




							<?php echo number_format($generalPriceStudent) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $generalPriceStudentUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $generalPriceStudentEuro ?>
							</span>
							</span>
							<span class="category">Student</span>
							<a href="#" class="register not-open">Not Open</a>
						</div>
					</div>
				</div>
				<div class="price-slab">
					<div class="left">
						<h4>
							<?php echo $latePlanName ?>
						</h4>
						<p class="date">Opens July 2. Closes on September 1, 2017</p>
					</div>
					<div class="right">
						<div class="price-cube"><span class="price">
							<span class="inr normal"><span class="price-symbol">&#8377;</span>




							<?php echo number_format($latePriceFullConf) ?>
							</span>
							<span class="inr developing"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($latePriceFullConfDeveloping) ?>
							</span>
							<span class="usd normal"><span class="price-symbol">$</span>
							<?php echo $latePriceFullConfUSD ?>
							</span>
							<span class="usd developing"><span class="price-symbol">$</span>
							<?php echo $latePriceFullConfDevelopingUSD ?>
							</span>
							<span class="euro normal"><span class="price-symbol">&#8364;</span>
							<?php echo $latePriceFullConfEuro ?>
							</span>
							<span class="euro developing"><span class="price-symbol">&#8364;</span>
							<?php echo $latePriceFullConfDevelopingEuro ?>
							</span>
							</span>
							<span class="category">Full Conference</span>
							<a href="#" class="register not-open">Not Open</a>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>








							<?php echo number_format($latePriceOneDay) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $latePriceOneDayUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $latePriceOneDayEuro ?>
							</span>
							</span>
							<span class="category">One Day</span>
							<a href="#" class="register not-open">Not Open</a>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>








							<?php echo number_format($latePriceStudent) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $latePriceStudentUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $latePriceStudentEuro ?>
							</span>
							</span>
							<span class="category">Student</span>
							<a href="#" class="register not-open">Not Open</a>
						</div>
					</div>
				</div>
				<div class="price-slab">
					<div class="left">
						<h4>
							<?php echo $walkinPlanName ?>
						</h4>
						<p class="date">Opens September 2. Closes on September 29, 2017</p>
					</div>
					<div class="right">
						<div class="price-cube"><span class="price">
							<span class="inr normal"><span class="price-symbol">&#8377;</span>




							<?php echo number_format($walkinPriceFullConf) ?>
							</span>
							<span class="inr developing"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($walkinPriceFullConfDeveloping) ?>
							</span>
							<span class="usd normal"><span class="price-symbol">$</span>
							<?php echo $walkinPriceFullConfUSD ?>
							</span>
							<span class="usd developing"><span class="price-symbol">$</span>
							<?php echo $walkinPriceFullConfDevelopingUSD ?>
							</span>
							<span class="euro normal"><span class="price-symbol">&#8364;</span>
							<?php echo $walkinPriceFullConfEuro ?>
							</span>
							<span class="euro developing"><span class="price-symbol">&#8364;</span>
							<?php echo $walkinPriceFullConfDevelopingEuro ?>
							</span>
							</span>
							<span class="category">Full Conference</span>
							<a href="#" class="register not-open">Not Open</a>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>








							<?php echo number_format($walkinPriceOneDay) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $walkinPriceOneDayUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $walkinPriceOneDayEuro ?>
							</span>
							</span>
							<span class="category">One Day</span>
							<a href="#" class="register not-open">Not Open</a>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>








							<?php echo number_format($walkinPriceStudent) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $walkinPriceStudentUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $walkinPriceStudentEuro ?>
							</span>
							</span>
							<span class="category">Student</span>
							<a href="#" class="register not-open">Not Open</a>
						</div>
					</div>
				</div>
				<p>Forex rates of 1 USD =
					<?php echo $usd?> INR and 1 Euro =
					<?php echo $euro?> INR are used to show the above estimates. Prevailing currency rates will be used during billing.</p>
			</div>
		</section>
<<<<<<< HEAD:registration.php
				<h3>Workshops / Field Trips / Courses</h3>
<section>
<p>Following are the additional registration fees for participants of workshops, field trips and courses.</p>
<p>Add-ons will be available from <span class="">June 1, 2017 onwards</span>. Participants who register as Delegates before June 1, can separately register for these after paying the additional registration fees. </p>
<div class="pricing-controls">
				<div class="currency-buttons">
					<ul>
						<li id="show-inr" title="Indian Rupee" class="active show-inr">&#8377;</li
						><li id="show-usd" class="show-usd" title="US Dollar">$</li
						><li id="show-euro" class="show-euro" title="Euro">&#8364;</li>
					</ul>
				</div>
			</div>
	<div class="price-table">
			<div class="price-slab">
					<div class="left">
						<h4>
							Workshops - For Delegates
						</h4>
						<p class="date">If registered for at least as a One-Day Delegate for the conference
						</p>
					</div>
					<div class="right">
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($workshopFeeOneDayWithConf) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $workshopFeeOneDayWithConfUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $workshopFeeOneDayWithConfEuro ?> </span>
							</span>
							<span class="category">For <br>One-Day Worskhop</span>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($workshopFeeTwoDayWithConf) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $workshopFeeTwoDayWithConfUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $workshopFeeTwoDayWithConfEuro ?> </span>
							</span>
							<span class="category">For <br>Two-Day Worskhop</span>
						</div>
					</div>
				</div>
				<div class="price-slab">
					<div class="left">
						<h4>
							Workshops - For Non-Delegates
						</h4>
						<p class="date">If NOT registered as a Delegate for the conference
						</p>
					</div>
					<div class="right">
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($workshopFeeOneDayWithoutConf) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $workshopFeeOneDayWithoutConfUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $workshopFeeOneDayWithoutConfEuro ?> </span>
							</span>
							<span class="category">For <br>One-Day Worskhop</span>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($workshopFeeTwoDayWithoutConf) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $workshopFeeTwoDayWithoutConfUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $workshopFeeTwoDayWithoutConfEuro ?> </span>
							</span>
							<span class="category">For <br>Two-Day Worskhop</span>
						</div>
					</div>
				</div>
				<div class="price-slab">
					<div class="left">
						<h4 style="line-height: 1.2;">
							Field Trips - For Delegates
						</h4>
						<p class="date">If registered for at least as a One-Day Delegate for the conference
						</p>
					</div>
					<div class="right">
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($FieldTripFeeOneDayWithConf) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $FieldTripFeeOneDayWithConfUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $FieldTripFeeOneDayWithConfEuro ?> </span>
							</span>
							<span class="category">For <br>One-Day Trip</span>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($FieldTripFeeTwoDayWithConf) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $FieldTripFeeTwoDayWithConfUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $FieldTripFeeTwoDayWithConfEuro ?> </span>
							</span>
							<span class="category">For <br>Two-Day Trip</span>
						</div>
					</div>
				</div>
				<div class="price-slab">
					<div class="left">
						<h4 style="line-height: 1.2;">
							Field Trips - For Non-Delegates
						</h4>
						<p class="date">If NOT registered as a Delegate for the conference
						</p>
					</div>
					<div class="right">
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($FieldTripFeeOneDayWithoutConf) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $FieldTripFeeOneDayWithoutConfUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $FieldTripFeeOneDayWithoutConfEuro ?> </span>
							</span>
							<span class="category">For <br>One-Day Trip</span>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($FieldTripFeeTwoDayWithoutConf) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $FieldTripFeeTwoDayWithoutConfUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $FieldTripFeeTwoDayWithoutConfEuro ?> </span>
							</span>
							<span class="category">For <br>Two-Day Trip</span>
						</div>
					</div>
				</div>
				<div class="price-slab">
					<div class="left">
						<h4>
							Courses
						</h4>
						<p class="date">Pricing is based on the length of the course
						</p>
					</div>
					<div class="right">
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($courseFeeOneSession) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $courseFeeOneSessionUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $courseFeeOneSessionEuro ?> </span>
							
							</span>
							<span class="category">For <br>one-session Course</span>
						</div>
						<div class="price-cube"><span class="price">
							<span class="inr"><span class="price-symbol">&#8377;</span>
							<?php echo number_format($courseFeeTwoSession) ?>
							</span>
							<span class="usd"><span class="price-symbol">$</span>
							<?php echo $courseFeeTwoSessionUSD ?>
							</span>
							<span class="euro"><span class="price-symbol">&#8364;</span>
							<?php echo $courseFeeTwoSessionEuro ?> </span>
							
							</span>
							<span class="category">For <br>two-session Course</span>
						</div>
					</div>
				</div>
				<p>Please check the respective <a href="workshops">Workshops</a>, <a href="field-trips">Field Trips</a> and <a href="courses">Courses</a> pages for complete details.</p>
			</div>
</section>
				<h3>Fee Details</h3>
=======
		<h3>Fee Details</h3>
>>>>>>> master:event-pricing.php
		<section>
			<p><span class="bold">Full Conference Delegate Fee</span> includes access to main program sessions, coffee breaks, the welcome reception, the banquet, and the conference proceedings. </p>
			<p><span class="bold">One Day Delegate Fee</span> includes access to Main program sessions, coffee breaks, the welcome reception, the banquet, and the conference proceedings ONLY for one of the chosen dates of the conference.</p>
			<p><span class="bold">Student Delegate Fee</span> includes access to main program sessions, coffee breaks, and the conference proceedings</p>
			<p>The delegate fee DOES NOT include air tickets, travel allowance, visa charges and accommodation</p>
		</section>
		<h3>Cancellation Policy</h3>
		<section>
			<ul>
				<li>The Super Early Registration is non-refundable.</li>
				<li>Please send a cancellation request to registration[at]interact2017[dot]org. The following conditions apply:
					<ul>
						<li> A 15% cancellation fee will be applicable to all cancellation requests made on or before July 1, 2017.
						</li>
						<li> A 25% cancellation fee will be applicable to all cancellation requests made from July 2 and August 1, 2017.
						</li>
						<li> No refund will be made for cancellation requests made after August 1, 2017.
						</li>
						<li> Any kind of bank charges, taxes and bank fees will need to be borne by the participant.
						</li>
						<li> The prevailing Indian Rupee (&#8377;) equivalent will be used to calculate all refunds.</li>
					</ul>
				</li>
				<li>A registration can be transferred to another participant up to August 15, 2017 at no additional cost. Please write to registration[at]interact2017[dot]org</li>
			</ul>
		</section>
		<h3>Terms &amp; Conditions</h3>
		<section>
			<ul>
				<li>The prevailing Indian Rupee (&#8377;) equivalent will be used to calculate all payments.</li>
				<li>Online payment may include additional charges like taxes, currency conversion charges, transaction fee, etc. These will be charged in addition to the above mentioned delegate fee.</li>
				<li>The onus of obtaining a valid travel visa and air tickets lies totally with the individual.
					<!--Check <a href="#">Travel &amp; Visa</a> page for more information.-->
				</li>
				<li>Get in touch with registration[at]interact2017[dot]org in case of any queries.</li>
				<li>If you require an invitation letter for the conference, please write to registration[at]interact2017[dot]org with a proof of payment and a scan of your passport.</li>
			</ul>
		</section>

		<h3>Registration</h3>
		<section>
			<ul>
				<li>In order to register for INTERACT 2017 Mumbai, you must create an account with us.</li>
				<li>If you already created an account, please <a href="register/index.php?active=login">Log In</a>. Haven't created an account yet? <a href="register/index.php?active=register">Register Now</a></li>
				<li>You will be able to purchase ticket, select workshop/courses, book accomodation and field trips from your account.</li>
			</ul>
		</section>


	</article>
</div>
<script src="js/bootstrap.js"></script>

<?php include("footer.php"); ?>
