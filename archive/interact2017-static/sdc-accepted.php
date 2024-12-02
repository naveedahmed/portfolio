<?php
$pageTitle = "Student Design Consortium - Accepted";
$pageDesc = "See the list of accepted entries for SDC for the conference. Authors will present these during the conference.";
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
		<p><a href="sdc" class="back-to">Go to SDC CFP</a>
		</p>
		<p>The list of accepted Student Design Consortium (SDC) entries for this year appear below. Authors will present these during the conference.</p>
<!--
		<div class="info yellow">
			<p><span class="">Note for Authors:</span> At least one author for each accepted submission must register for the conference by <span class="bold">July 1, 2017</span> for the submission to be included in the proceedings.</span></p>
		</div>
-->

		<section>
		<h3>Accepted SDC Entries</h3>
	<ol class="paper-list">
	
	
	<li>Community Based System Design for Indian Railways in the Context of Senior Citizens<br><span class="subtle">Atul Kumar // National Institute of Design, India
		</span></li><li>Seek: Art Teaching Aid<br><span class="subtle">Abhijith KR // Indian Institute of Technology Bombay, India
		</span></li><li>Service design for blood bank system<br><span class="subtle">Suchismita Naik // National Institute of Design, Bangalore, India
		</span></li><li>TouchPIN: Numerical Passwords You Can Feel<br><span class="subtle">Gesu India // Indian Institute of Technology, Patna, India
		</span></li><li>SwitchTabs : More Efficient Natural Interaction With Browser Tabs<br><span class="subtle">Chinmay Anand , Kushagra Khandelwal , Sunny Kumar // Indian Institute of Technology Guwahati, India			</span></li>
			<li>Minting dreams; financial literacy in India  - <span class="withdrawn">Withdrawn</span><br><span class="subtle">Uttishta Varanasi, Vikram Parmar // National Institute of Design, India
		</span></li>
			</ol>
		</section>
	</article></div>
</div> <?php include( "footer.php" );
?>