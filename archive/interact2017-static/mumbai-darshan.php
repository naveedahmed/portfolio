<?php
$pageTitle = "Mumbai Darshan";
$pageDesc = "While you are here for the conference, make sure you don't miss out visiting the historic and public interest places of India's business capital.";

$pagePreviewImage = 'img/indiaHCI_2014_team_preview.jpg';
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
                    <img src="img/mumbai_darshan.jpg" width="1000" alt="The pigeons at the Taj Mahal Hotel in Mumbai" />
                    <figcaption>The pigeons at the Taj Mahal Hotel in Mumbai</figcaption>
                </figure>
		<section><p>For participants of INTERACT 2017, we are organising one-day Mumbai guided tours called "Mumbai Darshan". The tours are planned on September 24, 25, 26 and 30. The bus will depart from the IIT Bombay campus at 8 am and will return to the campus by 6 pm. Depending on the response, additional stops could be planned. A professional guide will accompany each tour. In addition, a student volunteer will also be present.</p> 

<p>The cost of the tour is <?php coursePricing(2000);?> per participant. Participants can buy additional tour tickets for companions. The tour fees include costs of the bus and the guide. Participants need to pay additional fees for entrance tickets and meals. You can sign up for Mumbai Darshan tours on the registration page. Please note that we need at least 10 participants signed up by September 10 to run a tour.
</p>
<p>More details about the tour will be put up here shortly.</p>
			
			</section>
		</article>
	</div>
</div>

<?php include( "footer.php" );?>