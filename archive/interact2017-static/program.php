<?php 
 $pageTitle = "Program & Schedule";
$pageDesc = "Detailed schedule of talks, presentations, events, and the program for the conference.";

$pagePreviewImage = 'img/program_preview.jpg';
	
include("header.php"); ?>
    <div class="content wrapper">

        <article>
            <h2><?php echo $pageTitle ?></h2>
<p>            The INTERACT 2017 Conference is a five-day event consisting of a two-day pre-conference (Sep 25-26) that includes <a href="workshops-accepted">Workshops</a>, <a href="field-trips-accepted">Field Trips</a>, and <a href="dc-accepted">Doctoral Consortium</a>; and a three-day main technical program (Sep 27-29) including <a href="talks">Keynotes &amp; Talks</a>, <a href="courses-accepted">Courses</a>, Papers (<a href="full-papers-accepted">Full</a> &amp; <a href="short-papers-accepted">Short</a>), <a href="demos-accepted">Demos</a>, <a href="interactive-posters">Posters</a>, <a href="panels-accepted">Panels</a>, <a href="case-studies-accepted">Case Studies</a>, <a href="industry-accepted">Industry Tracks</a>, and the consorita (<a href="src-accepted">Student Research</a> and <a href="sdc-accepted">Student Design</a>), etc.
</p>
<p>The Conference will be held in the <a href="venue">IIT Bombay campus</a> on all the five days. Delegates can find some Guidelines about the conference <a href="guidelines">here</a>.
</p>         
<!--              <p>Below is the tentative detailed program for the Conference. This program <span class="text-highlight">may undergo several changes</span> in the next few weeks.</p>-->
			<div class="info">
				Visit <a href="proceedings">the Proceedings page</a> for Springer and ACM DL links to the conference proceedings.
			</div>
           <div class="info document"><a href="files/INTERACT_Schedule_Web_V11.pdf" target="_blank">Download a PDF version of the program</a> (Current version: v11, last updated: Sep 28, 2017 0012hrs)</div>
            <?php
//				include("schedule_sep25.php");
//				include("schedule_sep26.php");
//				include("schedule_sep27.php");
				include("schedule_sep28.php");
				include("schedule_sep29.php");
	 
			?>
       <p class="program-update">The program is subject to multiple changes without prior notice.<!-- (Last updated:
       <?php
date_default_timezone_set("America/Los_Angeles");
//echo "Current File: ";
//echo $_SERVER['REQUEST_URI'];
echo date ("F d Y, H.i", getlastmod())." PT";
?>)--></p>
       
        </article>
    </div>
    <div class="content wrapper narrow in-body">
    	 <?php
				include("schedule_details.php");
	 
			?>
    </div>


    <?php include("footer.php"); ?>