<?php
$pageTitle = "Demonstrations - Accepted";
$pageDesc = "See the list of accepted Demonstrations for the conference. Authors will present these during the conference.";
$pagePreviewImage = 'img/fullpapers_preview.jpg';
include( "header.php" );
?>

<div class="content wrapper">
<?php include( "accepted-nav.php"); ?>
	<div class="right-col">
	<article>
		<h2>
			<?php echo $pageTitle ?>
		</h2>
		<p><a href="demos" class="back-to">Go to Demos' CFP</a>
		</p>
		<p>The tentative list of accepted Demonstrations for this year appear below. Authors will present these during the conference.</p>
<!--
		<div class="info yellow">
			<p><span class="">Note for Authors:</span> At least one author for each accepted submission must register for the conference by <span class="bold">July 1, 2017</span> for the submission to be included in the proceedings.</span></p>
		</div>
-->

		<section>
		<h3>Accepted Demonstrations</h3>
	<ol class="paper-list">
	<li>Little Bear – A Gaze Aware Learning Companion for Early Childhood Learners	<br> <span class="subtle">Deepak Akkil, Prasenjit Dey, and Nitendra Rajput <br> 	Contact Author: Akkil, Deepak // deepak.akkil[at]uta.fi</span></li>
<?php 
//<li>A Moment Free from Darkness	<span class="subtle"> <br> 	Contact Author: Schrank, Brian // bschrank[at]gmail[dot]com</span></li>
	// >>>>>> This demo has been hidden as I am waiting for confirmation from Marco on this.
?>
<li>Inclusive Side-scrolling Action Game Securing Accessibility for Visually Impaired People	<br> <span class="subtle">Masaki Matsuo, Takahiro Miura, Masatsugu Sakajiri, Junji Onishi, and Tsukasa Ono <br> 	Contact Author: Miura, Takahiro // miu[at]iog.u-tokyo.ac.jp</span></li>
<li>ReRide
A Platform to Explore Interaction with Personal Data Before, During, and After Motorcycle Commuting
	<br> <span class="subtle">Naveen Bagalkot, Tomas Sokoler, Riyaj Shaikh, Gaurav Singh, Anders Edelbo Lillie, Pratiksha Dixit, Aditi Rai, Chakravarthy Vignesh, and Ashwin Senthil <br> 	Contact Author: Bagalkot, Naveen // naveen[at]srishti.ac.in</span></li>
<li>Coaching Compliance: A Tool for Personalized e-Coaching in Cardiac Rehabilitation	<br> <span class="subtle">Supraja Sankaran, Mieke Haesen, Paul Dendale, Kris Luyten, and Karin Coninx <br> 	Contact Author: Sankaran, Supraja // supraja.sankaran[at]uhasselt.be</span></li>
<li>SoPhy: Smart Socks for Video Consultations of Physiotherapy	<br> <span class="subtle">Deepti Aggarwal, Thuong Hoang, Weiyi Zhang, Bernd Ploderer, Frank Vetere, and Mark Bradford <br> 	Contact Author: Aggarwal, Deepti // daggarwal[at]student.unimelb.edu.au</span></li>
			</ol>
		</section>
	</article></div>
</div> <?php include( "footer.php" );
?>