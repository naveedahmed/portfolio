<?php
$pageTitle = "Conference Dinner";
$pageDesc = "The Conference Dinner will be on Sep 28, 2017 at Meluha, the Fern in Powai, Mumbai";

$pagePreviewImage = 'img/conference_banquet_interact2015.jpg';
include( "header.php" );
?>


<div class="content wrapper">
	<?php include("social-nav.php"); ?>
	<div class="right-col">
		<article>
			<h2>
				<?php echo $pageTitle ?>
			</h2>
			 <figure>
                    <img src="img/conference_banquet_interact2015.jpg" width="1000" alt="Conference Banquet during INTERACT 2015 Bamberg" />
                    <figcaption>Conference Banquet during INTERACT 2015 Bamberg</figcaption>
                </figure>
		<section>
			<p>We will be having a Conference Dinner on Thursday, September 28 from 7 pm to 9 pm. </p>

<p>The conference registration of delegates registered for the full conference, delegates with one-day registration for September 28, and those with student registration includes a ticket for the Conference Dinner. In case participants wish to invite companions for the dinner, they can buy guest tickets on the registration page. Each guest ticket costs <?php coursePricing(3000);?>. The Conference Dinner ticket is not included for delegates with one-day registration for September 27 or 29, but they may optionally buy a ticket for themselves on the registration page.
</p>
<div class="info">
	<p>The conference dinner will be held on the top floor of <span class="bold">Meluha the Fern</span> hotel on September 28. The dinner starts from 7 pm</p>
	<p><a href="https://goo.gl/maps/qLqLxZQSDsm" target="_blank">Google Maps Location</a></p>
</div>			
			</section>
		</article>
	</div>
</div>

<?php include( "footer.php" );?>