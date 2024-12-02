
<?php
//Variables File	
//------------------------------------------------------------
// Currency Multipliers
// As per RBI guidelines
// $ = 64.0468 INR, Euro =  76.1516 INR
// Rounded off to next integer
// Last price date: Sep 5, 2017
// Source: https://www.rbi.org.in/
$usd 	= ceil(64.0468);
$euro 	= ceil(76.1516);

$precisionLinkStandalone = '<a href="https://precisionconference.com/~interact/" target="_blank"> Precision Conference System (PCS)</a>';
$unescoDevCountryURL = 'files/ifcd_list_developing_countries_eligible_8call_en_2017.pdf';

function coursePricing($price){
	global $usd, $euro;
	echo "&#8377;&nbsp;" . number_format($price);
	echo " (~";
	echo "$".ceil($price/$usd);
	echo "/";
	echo "&#8364;".ceil($price/$euro);
	echo ")";
}

//All email IDs 
$emailVenue = "venue[at]interact2017[dot]org";
$emailChildcare = "childcare[at]interact2017[dot]org";
$emailAccessibility = "accessibility[at]interact2017[dot]org";

//CSS & JS Versioning to avoid cache issues
$cssVersion = 1.21;
$jsVersion = 1.02;
?>