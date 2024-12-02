<?php
$pageTitle = "Competitions";
$pageDesc = "Have a look at the pre-event and during-the-event competitions of the Conference. There are some amazing prizes to be won too.";

$pagePreviewImage = 'img/competitions_cover.jpg';
include( "header.php" );
?>


<div class="content wrapper">
	<?php include("competitions-nav.php"); ?>
	<div class="right-col">
		<article>
			<h2>
				<?php echo $pageTitle ?>
			</h2>
			<section>
			<p>The list of all the competitions during INTERACT 2017 Mumbai. Some of these are pre-event, while some will be announced and released during the conference.
</p>
<p>Yes, one more thing. There are lot of prizes to be won too. :D</p>
			
			<a href="pitney-bowes-design-challenge"><div class="social-card pb">
					<div class="grad-layer"></div>
					<div class="title">Pitney Bowes Design Challenge</div>
				</div></a>
				<a href="sculpture-design"><div class="social-card sculpture">
					<div class="grad-layer"></div>
					<div class="title">Sculpture Design</div>
				</div></a>
				
<div class="social-card comp">
					<div class="grad-layer"></div>
					<div class="title">More Coming Soon...</div>
				</div>
				
				
			</section>
		</article>
	</div>
</div>

<?php include( "footer.php" );?>