<?php
include_once ("variables.php");






//------------------------------------------------------------
//Plan IDs for general usage across pages
$earlyPlanID 			= "sep";
$earlyPlanName 			= "Super Early Registration";

$generalPlanFullConfID 	= "ep1";
$generalPlanOneDayID 	= "ep2";
$generalPlanStudentID 	= "ep3";
$generalPlanName 		= "Early Registration";

$latePlanFullConfID 	= "lp1";
$latePlanOneDayID 		= "lp2";
$latePlanStudentID 		= "lp3";
$latePlanName 			= "Late Registration";

$walkinPlanFullConfID 	= "wp1";
$walkinPlanOneDayID 	= "wp2";
$walkinPlanStudentID 	= "wp3";
$walkinPlanName 		= "Walk-in Registration";

//------------------------------------------------------------
//Base Pricing in Indian Rupee

$earlyPriceFullConf 	= 24000;

$generalPriceFullConf 	= 29000;
$generalPriceOneDay 	= 11000;
$generalPriceStudent	= 7500;

$latePriceFullConf 		= 34000;
$latePriceOneDay	 	= 13000;
$latePriceStudent 		= 10000;

$walkinPriceFullConf 	= 40000;
$walkinPriceOneDay 		= 15000;
$walkinPriceStudent 	= 12500;


	
//------------------------------------------------------------
//Pricing in USD
$earlyPriceFullConfUSD 		= ceil($earlyPriceFullConf/$usd);;

$generalPriceFullConfUSD 	= ceil($generalPriceFullConf/$usd);
$generalPriceOneDayUSD 		= ceil($generalPriceOneDay/$usd);
$generalPriceStudentUSD		= ceil($generalPriceStudent/$usd);

$latePriceFullConfUSD 		= ceil($latePriceFullConf/$usd);
$latePriceOneDayUSD 		= ceil($latePriceOneDay/$usd);
$latePriceStudentUSD 		= ceil($latePriceStudent/$usd);

$walkinPriceFullConfUSD 	= ceil($walkinPriceFullConf/$usd);
$walkinPriceOneDayUSD 		= ceil($walkinPriceOneDay/$usd);
$walkinPriceStudentUSD 		= ceil($walkinPriceStudent/$usd);

//Pricing in Euro
$earlyPriceFullConfEuro 	= ceil($earlyPriceFullConf/$euro);;

$generalPriceFullConfEuro 	= ceil($generalPriceFullConf/$euro);
$generalPriceOneDayEuro 	= ceil($generalPriceOneDay/$euro);
$generalPriceStudentEuro 	= ceil($generalPriceStudent/$euro);

$latePriceFullConfEuro 		= ceil($latePriceFullConf/$euro);
$latePriceOneDayEuro 		= ceil($latePriceOneDay/$euro);
$latePriceStudentEuro 		= ceil($latePriceStudent/$euro);

$walkinPriceFullConfEuro 	= ceil($walkinPriceFullConf/$euro);
$walkinPriceOneDayEuro 		= ceil($walkinPriceOneDay/$euro);
$walkinPriceStudentEuro 	= ceil($walkinPriceStudent/$euro);

//------------------------------------------------------------
//Early Bird Tickets Left
// $earlyTicketsLeft = $superEarlyCount;

//Developing Country Discount
$developingCountryDiscount 		= 8000;
$developingCountryDiscountUSD 	= ceil($developingCountryDiscount/$usd);
$developingCountryDiscountEuro 	= ceil($developingCountryDiscount/$euro);

//Developing Tickets Left 
// $developingTicketsLeft = $developingCountyDiscountCount;

//------------------------------------------------------------

//Developing Countries Pricing
//INR
$earlyPriceFullConfDeveloping 	= $earlyPriceFullConf-$developingCountryDiscount;
$generalPriceFullConfDeveloping = $generalPriceFullConf-$developingCountryDiscount;
$latePriceFullConfDeveloping 	= $latePriceFullConf-$developingCountryDiscount;
$walkinPriceFullConfDeveloping 	= $walkinPriceFullConf-$developingCountryDiscount;

//USD
$earlyPriceFullConfDevelopingUSD 	= ceil($earlyPriceFullConfDeveloping/$usd);
$generalPriceFullConfDevelopingUSD 	= ceil($generalPriceFullConfDeveloping/$usd);
$latePriceFullConfDevelopingUSD 	= ceil($latePriceFullConfDeveloping/$usd);
$walkinPriceFullConfDevelopingUSD 	= ceil($walkinPriceFullConfDeveloping/$usd);

//Euro
$earlyPriceFullConfDevelopingEuro 	= ceil($earlyPriceFullConfDeveloping/$euro);
$generalPriceFullConfDevelopingEuro = ceil($generalPriceFullConfDeveloping/$euro);
$latePriceFullConfDevelopingEuro 	= ceil($latePriceFullConfDeveloping/$euro);
$walkinPriceFullConfDevelopingEuro 	= ceil($walkinPriceFullConfDeveloping/$euro);

//------------------------------------------------------------

//Add-ons - Workshops, Field Trips, Courses in the Registration page
//Names
$courseRegistrationName = "Courses";
$workshopsFieldTripswithConfName = "Workshops + Field Trips with Conference";
$workshopsFieldTripsOnlyPerDayName = "Only Workshops + Field Trips";

//INR
$workshopFeeOneDayWithConf 		= 3500;
$workshopFeeTwoDayWithConf 		= 7000;

$workshopFeeOneDayWithoutConf 	= 6000;
$workshopFeeTwoDayWithoutConf 	= 12000;

$FieldTripFeeOneDayWithConf 	= $workshopFeeOneDayWithConf;
$FieldTripFeeTwoDayWithConf 	= $workshopFeeTwoDayWithConf ;

$FieldTripFeeOneDayWithoutConf 	= $workshopFeeOneDayWithoutConf;
$FieldTripFeeTwoDayWithoutConf 	= $workshopFeeTwoDayWithoutConf;

$courseFeeOneSession 			= 750;
$courseFeeTwoSession 			= 1500;

//USD
$workshopFeeOneDayWithConfUSD 		= ceil($workshopFeeOneDayWithConf /$usd);
$workshopFeeTwoDayWithConfUSD 		= ceil($workshopFeeTwoDayWithConf/$usd);

$workshopFeeOneDayWithoutConfUSD 	= ceil($workshopFeeOneDayWithoutConf/$usd);
$workshopFeeTwoDayWithoutConfUSD 	= ceil($workshopFeeTwoDayWithoutConf/$usd);

$FieldTripFeeOneDayWithConfUSD 		= ceil($FieldTripFeeOneDayWithConf/$usd);
$FieldTripFeeTwoDayWithConfUSD 		= ceil($FieldTripFeeTwoDayWithConf /$usd);

$FieldTripFeeOneDayWithoutConfUSD 	= ceil($FieldTripFeeOneDayWithoutConf/$usd);
$FieldTripFeeTwoDayWithoutConfUSD 	= ceil($FieldTripFeeTwoDayWithoutConf/$usd);

$courseFeeOneSessionUSD 			= ceil($courseFeeOneSession/$usd);
$courseFeeTwoSessionUSD 			= ceil($courseFeeTwoSession/$usd);

//Euro
$workshopFeeOneDayWithConfEuro 		= ceil($workshopFeeOneDayWithConf /$euro);
$workshopFeeTwoDayWithConfEuro 		= ceil($workshopFeeTwoDayWithConf/$euro);

$workshopFeeOneDayWithoutConfEuro 	= ceil($workshopFeeOneDayWithoutConf/$euro);
$workshopFeeTwoDayWithoutConfEuro 	= ceil($workshopFeeTwoDayWithoutConf/$euro);

$FieldTripFeeOneDayWithConfEuro 	= ceil($FieldTripFeeOneDayWithConf/$euro);
$FieldTripFeeTwoDayWithConfEuro 	= ceil($FieldTripFeeTwoDayWithConf /$euro);

$FieldTripFeeOneDayWithoutConfEuro 	= ceil($FieldTripFeeOneDayWithoutConf/$euro);
$FieldTripFeeTwoDayWithoutConfEuro 	= ceil($FieldTripFeeTwoDayWithoutConf/$euro);

$courseFeeOneSessionEuro 			= ceil($courseFeeOneSession/$euro);
$courseFeeTwoSessionEuro 			= ceil($courseFeeTwoSession/$euro);

?>