<?php
$pageTitle = "Billing";
$pageDesc = "Billing page for INTERACT 2017 Registration";
$pagePreviewImage = 'img/interact2017_preview.png';
include( "header.php" );
include( "pricing.php" );
?>
<script src="js/getParameter.js"></script>

<script>
	var registrationValues = {
		sepVal: "<?php echo $earlyPriceFullConf ?>",
		ep1Val: "<?php echo $generalPriceFullConf ?>",
		ep2Val: "<?php echo $generalPriceOneDay ?>",
		ep3Val: "<?php echo $generalPriceStudent ?>",
		lp1Val: "<?php echo $latePriceFullConf ?>",
		lp2Val: "<?php echo $latePriceOneDay ?>",
		lp3Val: "<?php echo $latePriceStudent ?>",
		wp1Val: "<?php echo $walkinPriceFullConf ?>",
		wp2Val: "<?php echo $walkinPriceOneDay ?>",
		wp3Val: "<?php echo $walkinPriceStudent ?>"
	}
</script>

<div class="content wrapper narrow">
	<article>
		<h2>
			<?php echo $pageTitle ?>
		</h2>
		<div class="billing-details">
			<!--             	<h3>Billing Details</h3>-->
			<section>
				<!--                    <p>Please fill the following details before proceeding to payment.</p>-->
				<form class="billing-details-form">
					<label for="" class="no-top">Delegate Fee</label>
					<!--					<div class="sub-label">You selected this in the previous page</div>-->
					<select id="delegatefee" name="delegatefee">
						<option disabled selected>Select a plan</option>
						<option value="<?php echo $earlyPlanID ?>">
							<?php echo $earlyPlanName ?> : &#8377;
							<?php echo number_format($earlyPriceFullConf) ?> (Non-refundable)
						</option>
						<option disabled>-</option>
						<option value="<?php echo $generalPlanFullConfID ?>">
							<?php echo $generalPlanName ?>, Full Conference: &#8377;
							<?php echo number_format($generalPriceFullConf) ?>
						</option>
						<option value="<?php echo $generalPlanOneDayID ?>">
							<?php echo $generalPlanName ?>, One Day: &#8377;
							<?php echo number_format($generalPriceOneDay) ?>
						</option>
						<option value="<?php echo $generalPlanStudentID ?>">
							<?php echo $generalPlanName ?>, Student : &#8377;
							<?php echo number_format($generalPriceStudent) ?>
						</option>
						<option disabled>-</option>
						<option value="<?php echo $latePlanFullConfID ?>">
							<?php echo $latePlanName?>, Full Conference: &#8377;
							<?php echo number_format($latePriceFullConf) ?>
						</option>
						<option value="<?php echo $latePlanOneDayID ?>">
							<?php echo $latePlanName ?>, One Day: &#8377;
							<?php echo number_format($latePriceOneDay) ?>
						</option>
						<option value="<?php echo $latePlanStudentID ?>">
							<?php echo $latePlanName ?>, Student : &#8377;
							<?php echo number_format($latePriceStudent) ?>
						</option>
						<option>-</option>
						<option value="<?php echo $walkinPlanFullConfID ?>">
							<?php echo $walkinPlanName ?>, Full Conference: &#8377;
							<?php echo number_format($walkinPriceFullConf) ?>
						</option>
						<option value="<?php echo $walkinPlanOneDayID ?>">
							<?php echo $walkinPlanName ?>, One Day: &#8377;
							<?php echo number_format($walkinPriceOneDay) ?>
						</option>
						<option value="<?php echo $walkinPlanStudentID ?>">
							<?php echo $walkinPlanName ?>, Student : &#8377;
							<?php echo number_format($walkinPriceStudent) ?>
						</option>
					</select>
					<span id="day-selection">
                        <label>Select Conference Day</label><select>
                        	<option disabled selected>-</option>
                        	<option>September 25, 2017</option>
                        	<option>September 26, 2017</option>
                        	<option>September 27, 2017</option>
                        	<option>September 28, 2017</option>
                        	<option>September 29, 2017</option>
                        </select></span>
				
					<div class="form-divider"></div>
					<label for="">Full Name<span class="mandatory">*</span></label>
					<div class="sub-label">This is how your name will appear on your ID card</div>
					<!--
                          <span class="salutation-wrapper">
                           <select class="salutation">
                            <option>-</option>
                            <option>Dr.</option>
                            <option>Prof.</option>
                            <option>Mr.</option>
                            <option>Ms.</option>
                            
                        </select></span>
-->
					<input type="text" class="" required>
					<label for="">Email Address<span class="mandatory">*</span></label>
					<div class="sub-label">We will use this to send you any future communication</div>
					<input type="email" required>
					<label for="">Mobile Number</label>
					<div class="sub-label">Please add your country code</div>

					<input type="text">

					<label for="">Affiliation<span class="mandatory">*</span></label>
					<div class="sub-label">Your University/Organization</div>
					<input type="text" required>
					<label>Country</label>
					<select id="countrySelector">
						<option disabled selected id="empty">Select a country</option>
						<option value="AF">Afghanistan</option>
						<option value="AX">Åland Islands</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antarctica</option>
						<option value="AG">Antigua and Barbuda</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaijan</option>
						<option value="BS">Bahamas</option>
						<option value="BH">Bahrain</option>
						<option value="BD">Bangladesh</option>
						<option value="BB">Barbados</option>
						<option value="BY">Belarus</option>
						<option value="BE">Belgium</option>
						<option value="BZ">Belize</option>
						<option value="BJ">Benin</option>
						<option value="BM">Bermuda</option>
						<option value="BT">Bhutan</option>
						<option value="BO">Bolivia, Plurinational State of</option>
						<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
						<option value="BA">Bosnia and Herzegovina</option>
						<option value="BW">Botswana</option>
						<option value="BV">Bouvet Island</option>
						<option value="BR">Brazil</option>
						<option value="IO">British Indian Ocean Territory</option>
						<option value="BN">Brunei Darussalam</option>
						<option value="BG">Bulgaria</option>
						<option value="BF">Burkina Faso</option>
						<option value="BI">Burundi</option>
						<option value="KH">Cambodia</option>
						<option value="CM">Cameroon</option>
						<option value="CA">Canada</option>
						<option value="CV">Cape Verde</option>
						<option value="KY">Cayman Islands</option>
						<option value="CF">Central African Republic</option>
						<option value="TD">Chad</option>
						<option value="CL">Chile</option>
						<option value="CN">China</option>
						<option value="CX">Christmas Island</option>
						<option value="CC">Cocos (Keeling) Islands</option>
						<option value="CO">Colombia</option>
						<option value="KM">Comoros</option>
						<option value="CG">Congo</option>
						<option value="CD">Congo, the Democratic Republic of the</option>
						<option value="CK">Cook Islands</option>
						<option value="CR">Costa Rica</option>
						<option value="CI">Côte d'Ivoire</option>
						<option value="HR">Croatia</option>
						<option value="CU">Cuba</option>
						<option value="CW">Curaçao</option>
						<option value="CY">Cyprus</option>
						<option value="CZ">Czech Republic</option>
						<option value="DK">Denmark</option>
						<option value="DJ">Djibouti</option>
						<option value="DM">Dominica</option>
						<option value="DO">Dominican Republic</option>
						<option value="EC">Ecuador</option>
						<option value="EG">Egypt</option>
						<option value="SV">El Salvador</option>
						<option value="GQ">Equatorial Guinea</option>
						<option value="ER">Eritrea</option>
						<option value="EE">Estonia</option>
						<option value="ET">Ethiopia</option>
						<option value="FK">Falkland Islands (Malvinas)</option>
						<option value="FO">Faroe Islands</option>
						<option value="FJ">Fiji</option>
						<option value="FI">Finland</option>
						<option value="FR">France</option>
						<option value="GF">French Guiana</option>
						<option value="PF">French Polynesia</option>
						<option value="TF">French Southern Territories</option>
						<option value="GA">Gabon</option>
						<option value="GM">Gambia</option>
						<option value="GE">Georgia</option>
						<option value="DE">Germany</option>
						<option value="GH">Ghana</option>
						<option value="GI">Gibraltar</option>
						<option value="GR">Greece</option>
						<option value="GL">Greenland</option>
						<option value="GD">Grenada</option>
						<option value="GP">Guadeloupe</option>
						<option value="GU">Guam</option>
						<option value="GT">Guatemala</option>
						<option value="GG">Guernsey</option>
						<option value="GN">Guinea</option>
						<option value="GW">Guinea-Bissau</option>
						<option value="GY">Guyana</option>
						<option value="HT">Haiti</option>
						<option value="HM">Heard Island and McDonald Islands</option>
						<option value="VA">Holy See (Vatican City State)</option>
						<option value="HN">Honduras</option>
						<option value="HK">Hong Kong</option>
						<option value="HU">Hungary</option>
						<option value="IS">Iceland</option>
						<option value="IN">India</option>
						<option value="ID">Indonesia</option>
						<option value="IR">Iran, Islamic Republic of</option>
						<option value="IQ">Iraq</option>
						<option value="IE">Ireland</option>
						<option value="IM">Isle of Man</option>
						<option value="IL">Israel</option>
						<option value="IT">Italy</option>
						<option value="JM">Jamaica</option>
						<option value="JP">Japan</option>
						<option value="JE">Jersey</option>
						<option value="JO">Jordan</option>
						<option value="KZ">Kazakhstan</option>
						<option value="KE">Kenya</option>
						<option value="KI">Kiribati</option>
						<option value="KP">Korea, Democratic People's Republic of</option>
						<option value="KR">Korea, Republic of</option>
						<option value="KW">Kuwait</option>
						<option value="KG">Kyrgyzstan</option>
						<option value="LA">Lao People's Democratic Republic</option>
						<option value="LV">Latvia</option>
						<option value="LB">Lebanon</option>
						<option value="LS">Lesotho</option>
						<option value="LR">Liberia</option>
						<option value="LY">Libya</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lithuania</option>
						<option value="LU">Luxembourg</option>
						<option value="MO">Macao</option>
						<option value="MK">Macedonia, the former Yugoslav Republic of</option>
						<option value="MG">Madagascar</option>
						<option value="MW">Malawi</option>
						<option value="MY">Malaysia</option>
						<option value="MV">Maldives</option>
						<option value="ML">Mali</option>
						<option value="MT">Malta</option>
						<option value="MH">Marshall Islands</option>
						<option value="MQ">Martinique</option>
						<option value="MR">Mauritania</option>
						<option value="MU">Mauritius</option>
						<option value="YT">Mayotte</option>
						<option value="MX">Mexico</option>
						<option value="FM">Micronesia, Federated States of</option>
						<option value="MD">Moldova, Republic of</option>
						<option value="MC">Monaco</option>
						<option value="MN">Mongolia</option>
						<option value="ME">Montenegro</option>
						<option value="MS">Montserrat</option>
						<option value="MA">Morocco</option>
						<option value="MZ">Mozambique</option>
						<option value="MM">Myanmar</option>
						<option value="NA">Namibia</option>
						<option value="NR">Nauru</option>
						<option value="NP">Nepal</option>
						<option value="NL">Netherlands</option>
						<option value="NC">New Caledonia</option>
						<option value="NZ">New Zealand</option>
						<option value="NI">Nicaragua</option>
						<option value="NE">Niger</option>
						<option value="NG">Nigeria</option>
						<option value="NU">Niue</option>
						<option value="NF">Norfolk Island</option>
						<option value="MP">Northern Mariana Islands</option>
						<option value="NO">Norway</option>
						<option value="OM">Oman</option>
						<option value="PK">Pakistan</option>
						<option value="PW">Palau</option>
						<option value="PS">Palestinian Territory, Occupied</option>
						<option value="PA">Panama</option>
						<option value="PG">Papua New Guinea</option>
						<option value="PY">Paraguay</option>
						<option value="PE">Peru</option>
						<option value="PH">Philippines</option>
						<option value="PN">Pitcairn</option>
						<option value="PL">Poland</option>
						<option value="PT">Portugal</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="RE">Réunion</option>
						<option value="RO">Romania</option>
						<option value="RU">Russian Federation</option>
						<option value="RW">Rwanda</option>
						<option value="BL">Saint Barthélemy</option>
						<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
						<option value="KN">Saint Kitts and Nevis</option>
						<option value="LC">Saint Lucia</option>
						<option value="MF">Saint Martin (French part)</option>
						<option value="PM">Saint Pierre and Miquelon</option>
						<option value="VC">Saint Vincent and the Grenadines</option>
						<option value="WS">Samoa</option>
						<option value="SM">San Marino</option>
						<option value="ST">Sao Tome and Principe</option>
						<option value="SA">Saudi Arabia</option>
						<option value="SN">Senegal</option>
						<option value="RS">Serbia</option>
						<option value="SC">Seychelles</option>
						<option value="SL">Sierra Leone</option>
						<option value="SG">Singapore</option>
						<option value="SX">Sint Maarten (Dutch part)</option>
						<option value="SK">Slovakia</option>
						<option value="SI">Slovenia</option>
						<option value="SB">Solomon Islands</option>
						<option value="SO">Somalia</option>
						<option value="ZA">South Africa</option>
						<option value="GS">South Georgia and the South Sandwich Islands</option>
						<option value="SS">South Sudan</option>
						<option value="ES">Spain</option>
						<option value="LK">Sri Lanka</option>
						<option value="SD">Sudan</option>
						<option value="SR">Suriname</option>
						<option value="SJ">Svalbard and Jan Mayen</option>
						<option value="SZ">Swaziland</option>
						<option value="SE">Sweden</option>
						<option value="CH">Switzerland</option>
						<option value="SY">Syrian Arab Republic</option>
						<option value="TW">Taiwan, Province of China</option>
						<option value="TJ">Tajikistan</option>
						<option value="TZ">Tanzania, United Republic of</option>
						<option value="TH">Thailand</option>
						<option value="TL">Timor-Leste</option>
						<option value="TG">Togo</option>
						<option value="TK">Tokelau</option>
						<option value="TO">Tonga</option>
						<option value="TT">Trinidad and Tobago</option>
						<option value="TN">Tunisia</option>
						<option value="TR">Turkey</option>
						<option value="TM">Turkmenistan</option>
						<option value="TC">Turks and Caicos Islands</option>
						<option value="TV">Tuvalu</option>
						<option value="UG">Uganda</option>
						<option value="UA">Ukraine</option>
						<option value="AE">United Arab Emirates</option>
						<option value="GB">United Kingdom</option>
						<option value="US">United States</option>
						<option value="UM">United States Minor Outlying Islands</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistan</option>
						<option value="VU">Vanuatu</option>
						<option value="VE">Venezuela, Bolivarian Republic of</option>
						<option value="VN">Viet Nam</option>
						<option value="VG">Virgin Islands, British</option>
						<option value="VI">Virgin Islands, U.S.</option>
						<option value="WF">Wallis and Futuna</option>
						<option value="EH">Western Sahara</option>
						<option value="YE">Yemen</option>
						<option value="ZM">Zambia</option>
						<option value="ZW">Zimbabwe</option>
					</select>
					<div class="citizen-container">
						<label for="">Avail discount for Developing Countries?</label>
						<div class="sub-label">Citizens of developing countries as per <a href="http://www.un.org/en/development/desa/policy/wesp/wesp_current/2012country_class.pdf" target="_blank">UN DESA Country Classification Index</a> get an additional discount of &#8377;
							<?php echo $developingCountryDiscount ?>
						</div>

						<label style="display: inline; margin-right:2em;">
                            <input type="radio" name="developingdiscount" value="yes" id="developingdiscount_yes"> Yes
                        </label>
					


						<label style="display: inline">
                            <input name="developingdiscount" type="radio" id="developingdiscount_no" value="no" checked="checked"> No
                        </label>
					



						<span id="citizen-proof"><label>Upload Proof of Citizenship (Preferably PDF)<span class="mandatory">*</span>
						</label>
						<div class="sub-label">E.g. National ID Card</div>
						<input type="file">
						</span>
					</div>
					<div class="form-divider"></div>
					<input type="submit" value="Proceed to Payment" class="submit-button">
				</form>
			</section>
		</div>
		<div class="billing-summary">
			<h3>Billing Summary</h3>
			<section>
				<div class="sec">
					<span class="left">Delegate Fee</span>
					<span class="right">&#8377;<span id="summary-delegate-fee">0</span></span>
				</div>
				<div class="sec">
					<span class="left">Participant from Developing Country Discount</span>
					<span class="right">- &#8377;<span id="develop-country-fee">0</span></span>
				</div>
				<!--
				<div class="sec subtotal">
					<span class="left">Subtotal</span>
					<span class="right">&#8377; 18,000</span>
				</div>
				<div class="sec">
					<span class="left">Taxes (14.5%)</span>
					<span class="right">&#8377; 18,000</span>
				</div>
-->
				<div class="sec total">
					<span class="left">Total</span>
					<span class="right">&#8377;<span id="grand-total"></span></span>
				</div>
			</section>
		</div>
	</article>

</div>
<script src="js/registration.js"></script>

<?php include("footer.php"); ?>