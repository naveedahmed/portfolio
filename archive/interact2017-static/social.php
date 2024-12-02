<?php
$pageTitle = "Social Events";
$pageDesc = "With several social events lined up during the conference, we promise you that your trip to Mumbai will not be just about work and academics.";

$pagePreviewImage = 'img/social_preview.jpg';
include( "header.php" );
?>


<div class="content wrapper">
	<?php include("social-nav.php"); ?>
	<div class="right-col">
		<article>
			<h2>
				<?php echo $pageTitle ?>
			</h2>
			<section>
			<p>With several social events lined up during the conference, we promise you that your trip to Mumbai will not be just about work and academics.</p>	
			
			<a href="food-menu"><div class="social-card food">
					<div class="grad-layer"></div>
					<div class="title">Food Menu</div>
				</div></a>
			
				<a href="mumbai-darshan"><div class="social-card darshan">
					<div class="grad-layer"></div>
					<div class="title">Mumbai Darshan</div>
				</div></a>
				
					<a href="freshies-night"><div class="social-card freshie">
					<div class="grad-layer"></div>
					<div class="title">Freshies' Night</div>
				</div></a>
				
					<a href="dandia-night"><div class="social-card dandia">
					<div class="grad-layer"></div>
					<div class="title">Dandia Night</div>
				</div></a>
				
					<a href="conference-dinner"><div class="social-card banquet">
					<div class="grad-layer"></div>
					<div class="title">Conference Dinner</div>
				</div></a>	
				
			</section>
		</article>
	</div>
</div>

<?php include( "footer.php" );?>