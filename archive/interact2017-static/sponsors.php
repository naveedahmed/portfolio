<?php
$pageTitle = "Sponsors & Partners";
$pageDesc = "Sponsor and partner information for the conference.";

$pagePreviewImage = 'img/interact2017_preview.png';
include( "header.php" );
?>

<div class="content wrapper narrow sponsors">
	<article>
		<h2>
			<?php echo $pageTitle ?>
		</h2>
		<p>
			We invite you to be a sponsor at INTERACT 2017 Mumbai, which will be held at IIT Bombay, Mumbai between September 25-29, 2017.
		</p>
		<p>The principal host for the conference is the Industrial Design Centre, India's leading design school situated inside IIT Bombay. Complete details <a href="about">about the event</a> and <a href="venue">the venue</a> are available in the respective pages.</p>
		<h3>Silver Sponsor</h3>
		<section>
			<?php include("sponsors-items-silver.php");?>
		</section>
		<h3>Asian HCI Research Symposium Sponsor</h3>
		<section>
			<?php include("sponsors-items-asian-hci-symp.php");?>
		</section>
		<h3>Conference Dinner Sponsor</h3>
		<section>
			<?php include("sponsors-items-dinner.php");?>
		</section>
		<h3>Design Competition Sponsor</h3>
		<section>
			<?php include("sponsors-items-design-competition.php");?>
		</section>
		<h3>Education Partners</h3>
		<section>
			<?php include("sponsors-items-educational.php");?>
		</section>
		<h3>Friends of INTERACT</h3>
		<section>
			<?php include("sponsors-items-friends.php");?>
		</section>
		<h3>Exhibitors</h3>
		<section>
			<?php include("sponsors-items-exhibitor.php");?>
		</section>
		<h3>Partners</h3>
		<section>
			<?php include("sponsors-items.php");?>
		</section>
		<h3>Sponsorship Categories &amp; Details</h3>
		<section>
		<p>Interested sponsors can be part of the conference in one of the following categories. Please note that each category has limited slots available.</p>
		<p> Sponsorship categories and slots available:</p>
		<ul>
			<li>Gold - 1 Slot</li>
			<li>Silver - 3 Slots</li>
			<li>Conference Dinner - 2 Slots</li>
			<li>Design Competition - 1 Slot</li>
			<li>Keynotes - 3 Slots</li>
			<li>Students - 2 Slots</li>
			<li>Installations - 1 Slot</li>
			<li>Garba Night - 2 Slots</li>
			<li>Friends of INTERACT - 8 Slots</li>
			<li>Exhibitor - 10 Slots</li>
		</ul>
			<div class="info document"><p><a href="files/INTERACT_2017_Sponsorship.pdf" target="_blank">Download complete details about categories, benefits and other details.</a></p></div>
			<p>For details about pricing, get in touch with Atul Manohar (Sponsorship Chair) at sponsors[at]interact2017.org 
</p>
		</section>

	</article>

</div>


<?php include( "footer.php" );?>
