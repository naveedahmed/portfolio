$(document).ready(function () {
	function set_summary() {
		// To delegate fee in the summary
		currentDelegateVal = registrationValues[selectedPlan + "Val"];
		$("#summary-delegate-fee").html(currentDelegateVal);
	}

	function calc_grandTotal() {
		//To calculate grand total

		var sumDelFee = $('#summary-delegate-fee').text();
		sumDelFee = parseInt(sumDelFee.replace(/,/g, ''), 10);

		var devCounFee = $('#develop-country-fee').text();
		devCounFee = parseInt(devCounFee.replace(/,/g, ''), 10);

		var grandTotal = sumDelFee - devCounFee;
		$("#grand-total").html(grandTotal);
	}

	function citizen_discount() {
		//To put citizen discount in summary table
		$("#citizen-proof").show();
		$('#develop-country-fee').html(8000);
		calc_grandTotal();
	}

	function citizen_discount_no() {

		$("#citizen-proof").hide();
		$('#develop-country-fee').html(0);
		calc_grandTotal();
	}

	function reset_citizen_discount() {
		//To reset some parts of the form 
		citizen_discount_no();
		$("#developingdiscount_yes").prop("checked", false);
		$("#developingdiscount_no").prop("checked", true);
	}

	set_summary(); //To set initial summary on page load
	calc_grandTotal(); // To calculate grand total on page load
	//    if (selectedPlan == null){
	////		console.log("");
	//		
	//	}
	// Getting selected plan value from previous page
	// and setting the dropdown to that value - on page load
	$("#delegatefee option").each(function () {
		if ($(this).val() == selectedPlan) {
			$(this).attr("selected", "selected");
		}
		if ($(this).val() == null) {
			$(this).attr("selected", "selected");
		}
	});

	// Arrays contains info about plans which support 
	// developing country discounts and which don't
	var developingDiscountArray = ["sep", "ep1", "lp1", "wp1"];
	var noDevelopingDiscountArray = ["ep2", "ep3", "lp2", "lp3", "wp2", "wp3"];
	var developingCountriesArray = ["DZ", "AO", "AR", "BH", "BD", "BB", "BJ", "BO", "BW", "BR", "BN", "BF", "BI", "CM", "CV", "CF", "TD", "CL", "CN", "CO", "KM", "CG", "CR", "CU", "CI", "CD", "DJ", "DO", "EC", "EG", "SV", "GQ", "ER", "ET", "GA", "GM", "GH", "GT", "GN", "GW", "GY", "HT", "HN", "HK", "IN", "ID", "IR", "IQ", "IL", "JM", "JO", "KE", "KW", "LB", "LS", "LR", "LY", "MG", "MW", "MY", "ML", "MR", "MU", "MX", "MA", "MZ", "MM", "NA", "NP", "NI", "NE", "NG", "OM", "PK", "PA", "PG", "PY", "PE", "PH", "QA", "KR", "RW", "ST", "SA", "SN", "SL", "SG", "SO", "ZA", "LK", "SD", "SY", "TW", "TH", "TG", "TT", "TN", "TR", "UG", "AE", "TZ", "UY", "VE", "VN", "YE", "ZM", "ZW", ];

	// Arrays contains info about plans 
	// that contain one day plans
	var oneDayPlans = ["ep2", "lp2", "wp2"];
	var noOneDayPlans = ["sep", "ep1", "ep3", "lp1", "lp3", "wp1", "wp3"];

	// Statements to show/hide citizen proof upload section
	if ($('#developingdiscount_yes').is(':checked')) {
		$("#citizen-proof").show();
	}
	if ($('#developingdiscount_no').is(':checked')) {
		$("#citizen-proof").hide();
	}
	$('#developingdiscount_yes').click(function () {
		if ($('#developingdiscount_yes').is(':checked')) {
			citizen_discount();
		}
	});
	$('#developingdiscount_no').click(function () {
		if ($('#developingdiscount_no').is(':checked')) {
			citizen_discount_no();
		}
	});

	// Statements to update summary table
	// whenever someone changes something in the plan dropdown
	var currentDelegateVal = registrationValues[selectedPlan + "Val"];
	var checkIfOneDay = function () {
		return oneDayPlans.filter(function (plan) {
			return plan === selectedPlan;
		}).length > 0;
	};
	$('#delegatefee').on('change', function () {
		selectedPlan = $(this).val();
		set_summary();
		calc_grandTotal();
		var isNonOneDay, isOneDay;
		isOneDay = oneDayPlans.filter(function (plan) {
			return plan === selectedPlan;
		}).length > 0;
		if (isOneDay) {
			$("#day-selection").show();
		} else {
			isNonOneDay = noOneDayPlans.filter(function (plan) {
				return plan === selectedPlan;
			}).length > 0;
			if (isNonOneDay) {
				$("#day-selection").hide();
			}
		}
		$(".citizen-container").hide();
		reset_citizen_discount();
		$("#countrySelector").prop('selectedIndex', 0);
	});
	$("#countrySelector").on('change', function () {
		var isDeveloping, isFullConference;
		selectedCountry = $(this).val();
		isFullConference = developingDiscountArray.filter(function (confCodes) {
			return confCodes === selectedPlan;
		}).length > 0;
		isDeveloping = developingCountriesArray.filter(function (country) {
			return country === selectedCountry;
		}).length > 0;
		//		console.log(isDeveloping);
		if (isDeveloping && isFullConference) {
			$(".citizen-container").show();
		} else {
			$(".citizen-container").hide();
			reset_citizen_discount();
		}
	});
});
