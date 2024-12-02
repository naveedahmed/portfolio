<?php
$pageTitle = "Sculpture Design Competition";
$pageDesc = "View details of the Sculpture Design Competition for the Conference.";

$pagePreviewImage = 'img/sculpture_preview.png';
include( "header.php" );
?>


<div class="content wrapper">
	<?php include("competitions-nav.php"); ?>
	<div class="right-col">
		<article>
			<h2>
				<?php echo $pageTitle ?>
			</h2>
		<figure>
                    <a href="https://interact2017.org/sculpture-design" target="_blank"><img src="img/sculpture_competition_poster_web.png" width="780" alt="Sculpture Design Competition Poster" /></a>
                    <figcaption>The Competition Poster</figcaption>
                </figure>
                <div class="green info"><p><span class="bold">Winners</span>: Technology and Us! by Amar Verma and Kalyani Dhone</p></div>
 <figure>
                    <img src="img/sculpture_winner_amar_kalyani.jpg" width="780" alt="Sculpture Design winning concept" />
                    <figcaption>The concept of the winning entry by Amar Verma and Kalyani Dhone</figcaption>
                </figure>
			
			</section>
		</article>
	</div>
</div>

<?php include( "footer.php" );?>