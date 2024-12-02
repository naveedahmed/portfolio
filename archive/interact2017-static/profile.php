<?php
$userName = "John Doe";
$userEmail = "john.doe@email.com";
$userOrg = "Acme International Inc.";
$userPhone = "+91 987 654 3210";
$currentStatus = "pending";

$pageTitle = null;
$pageDesc = "All your details and payment information with INTERACT 2017 Mumbai";

$pagePreviewImage = 'img/interact2017_preview.png';

include("header_login.php");
?>

<div class="content wrapper narrow">
	<article>
		<div class="profile-block">
			<div class="user-img"></div>
			<div class="user-details">
				<div class="name">
					<?php echo $userName ?><span class="small">(Your name on the ID card)</span>
				</div>
				<div class="email">
					Email: <?php echo $userEmail?>
				</div>
				<div class="org">
					Organization: <?php echo $userOrg?>
				</div>
				<div class="phone">
					Mobile: <?php echo $userPhone?>
				</div>
			</div>
		</div>
		<h3>Purchase History</h3>
		<div class="purchase-history-table">
			<div class="row head">
				<div class="col-1">
					Purchase
				</div>
				<div class="col-2">Date</div>
				<div class="col-3">Amount</div>
			</div>
			<div class="row">
				<div class="col-1">
					<span class="icon pending offset" title="Current Status: Pending"></span><span class="bold">Full Conference Registration</span><br>Order ID: 123456789<br> <a href="#" class="see-details">See Details</a><a href="#" class="hide-details">Hide Details</a>
				</div>
				<div class="col-2">Mar 21, 2017</div>
				<div class="col-3">
					<?php coursePricing(21000)?>
				</div>
				<div class="row-details">
					<p><span class="icon allok"></span>Payment Mode: Online via Explara</p>
					<p><span class="icon pending"></span>Payment: Confirmation Pending</p>
					<p><span class="icon pending"></span>Student Status: Confirmation Pending</p>
					<p><span class="icon pending"></span>Developing Country Status: Confirmation Pending</p>
					<p><span class=""><a href="" target="_blank">Download Receipt/Invoice</a></span> <span class="small">(Will be activated after all confirmations)</span></p>
				</div>
			</div>
				<div class="row">
				<div class="col-1">
					<span class="icon offset" title="Current Status: Pending"></span><span class="bold">Full Conference Registration</span><br>Order ID: 87654321<br> <a href="#" class="see-details">See Details</a>
				</div>
				<div class="col-2">Mar 21, 2017</div>
				<div class="col-3">
					<?php coursePricing(21000)?>
				</div>
				<div class="row-details">
					<p><span class="icon "></span>Payment Mode: Bank Transfer</p>
					<p><span class="icon "></span>Payment: Confirmed</p>
					<p><span class="icon "></span>Student Status: Confirmed</p>
					<p><span class="icon "></span>Developing Country Status: Confirmed</p>
					<p><span class=""><a href="" target="_blank">Download Receipt/Invoice</a></span></p>
				</div>
			</div>
			</div>
			<p class="payment-note">Payments may take at least 24 hrs to reflect on this page. In case of queries, please contact registration[at]interact2017.org.</p>
		</div>
	</article>
</div>

<?php include( "footer.php" );?>