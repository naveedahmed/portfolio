<?php
$pageTitle = "Courses";
$pageDesc = "Leading researchers and practitioners have the opportunity to present courses during with the main conference.";
$pagePreviewImage = 'img/courses_preview.jpg';
include( "header.php" );
?>
<div class="content wrapper">
	<?php include( "cfp-nav.php"); ?>
	<div class="right-col">
		<article>
			<h2>
				<?php echo $pageTitle ?>
			</h2>
			<span class="print-page"><a href="#" onclick="window.print();" title="Print Page"><img src="img/print.png" alt="Print Page" width="20" height="20"/></a></span>
			<p>Leading researchers and practitioners have the opportunity to present courses during the main conference program, September 27-29, 2017. Courses may cover any aspect of Human-Computer Interaction. Courses reflective of local needs and perspectives are encouraged.</p>
			<div class="info selected">
                     <p>Interested participants can register for the accepted Course proposals.</p>
                     <p><a href="courses-accepted" class="info-cta">View Accepted Proposals</a></p></div><br>
				<p> The following is a list of potential course topics:</p><ul>
					<li>Introduction to HCI
					</li>
					<li>Ethnographic Methods: Theory and Praxis</li>
					<li>Design Thinking for Solving Business Problems
					</li>
					<li>Transnational Issues and ICTD</li>
					<li>Iterative Design: a hands-on course
					</li>
					<li>Designing Interaction for Flexible &amp; Deformable Displays</li>
					<li><span class="italic">...or any HCI-related topic</span></li>
					
				</ul><br>
				<div class="info yellow">
                            <p>At least one author for each accepted submission must register for the conference by <span class="bold">July 15, 2017</span> (date extended)  for the submission to be included in the proceedings.</p>
                            </div>
			<h3>Quick Info</h3>
			<div class="quick-info">
				<div class="left-sec">

					<div class="title">Submission </div>
					<div class="detail">May 3, 2017 <span class="text-highlight">Extended</span></div>
					<div class="title">Notification</div>
					<div class="detail">May 19, 2017</div>
					<div class="title">Camera-Ready</div>
					<div class="detail">June 21, 2017</div>
				</div>
				<div class="right-sec">
					<div class="title">Co-Chairs</div>
					<div class="detail">Gerrit van der Veer, Dhaval Vyas</div>
					<div class="title">E-mail</div>
					<div class="detail">courses[at]interact2017[dot]org</div>
					<div class="title">Proceedings</div>
					<div class="detail"><?php include( "springer-lncs-link.php"); ?></div>
					<div class="title">No. of pages</div>
					<div class="detail">Proposal: 3 + 1, For Proceedings: 4</div>
					<div class="title">Anonymous</div>
					<div class="detail">No</div>
					<div class="title">Submission Link</div>
                    <div class="detail"><?php echo $precisionLinkStandalone; ?></div>
				</div>
			</div>
<h3>Selection Criteria</h3>
			<section>
				<ul>
					<li>Range of topics covered (contemporary HCI to more localized topics) </li>
					<li>
						Balancing of courses for all audiences (beginners, advanced, research-oriented, practitioner-oriented, etc.) </li>
					<li>
						Courses focusing on all stages of the (user-centred) design and development process </li>
					<li>
						Quality of the submission</li>
				</ul>
			</section>
			<h3>Important Information</h3>
			<section>
				<p>Courses will run as 80 minute sessions, with the maximum of two sessions per course. Accepted courses will be held only if they attract a minimum of 7 participants. All course instructors need to register for the conference.</p>
<ul><li>
If a one-session course attracts 20+ participants, <?php coursePricing(29000);?> will be paid to the Instructor(s).</li><li>
If a one-session course attracts 40+ participants, <?php coursePricing(58000);?> will be paid to the Instructor(s).</li><li>
If a two-session course attracts 15+ participants, <?php coursePricing(29000);?> will be paid to the Instructor(s).</li><li>
If a two-session course attracts 30+ participants, <?php coursePricing(58000);?> will be paid to the Instructor(s).
</li></ul>
<p>The participants need to register for either for the full conference or at least one day of the conference. In addition, they will need to pay an additional fee of <?php coursePricing(750); ?> per one-session course and <?php coursePricing(1500);?> per two-session course. They may register for any number of courses that don't clash.</p>


			</section>
			
			<h3>Submission
                  </h3>
			<section>
				<p> To apply, submit a course proposal with maximum four pages (3 plus 1) in PDF format. </p><p><span class="bold">Important</span>: For proposals to be included in the main proceedings, it MUST be 4 pages. The course proposal must follow the <?php include( "springer-lncs-format.php"); ?> for Microsoft Word and shall include:</p>
				<ul>
					<li>
						A three-page abstract for the advanced program including title of the course, learning objectives of the course, content of the course, duration of the course (3 hours max – 2 sessions), intended audience, and reading list (literature) that is suggested for the course. This abstract will be published in the conference proceedings in <?php include( "springer-lncs-link.php"); ?>.</li>
					<li>
						A two-page document on additional information including the background of the tutor(s), description of the pedagogical concept, etc.</li>
				</ul>
				<p>This means:</p>
				<ul>
					
					<li>Justification: Explain why this course would be of interest to the Interact audience
					</li>
					<li>Background of attendees: Describe the assumed background and expected skills of attendees. Include who should not take the course.
					</li>
					<li>Presentation format: Explain how the course will be conducted.
					</li>
					<li>Schedule: Describe time allocations to the course content.
					</li>
					<li>Audience size: What is the preferred audience size?
					</li>
				</ul>
				<p>The Conference Organisers will provide  projectors and projection screens in each room. If any additional resources are required, this must be indicated in the proposal.</p>

				<p>Deadline for submitting a course is May 3, 2017 - 23:59 PT, using the <?php include( "pcs-link.php"); ?>. </p>
				<p>
					<span class="text-highlight">Submissions for courses are NOT anonymous.</span>
				</p>

			</section>

		</article>
	</div>
</div>
<?php include( "footer.php"); ?>