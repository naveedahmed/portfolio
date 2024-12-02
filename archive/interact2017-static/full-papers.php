<?php 
 $pageTitle = "Full Papers";
$pageDesc = "Submissions may address any area of HCI, including those identified in the conference topics.";
$pagePreviewImage = 'img/fullpapers_preview.jpg';
	
include("header.php");
?>
        <div class="content wrapper">
                <?php include("cfp-nav.php"); ?>
                    <div class="right-col">
                        <article>
                            <h2><?php echo $pageTitle ?></h2>
                            <span class="print-page"><a href="#" onclick="window.print();" title="Print Page"><img src="img/print.png" alt="Print Page" width="20" height="20"/></a></span>
                            <p>Submissions of full papers are invited for publication in the conference proceedings. Papers may address any area of HCI, including those identified in the <a href="cfp#conf-topics">conference topics</a>. Submissions should report original work and must not have been published previously.
                            </p>
                            <p>All full paper submissions will be peer-reviewed by an international panel of experts. The review process will retain the anonymity of authors and reviewers. After review, authors of borderline papers may submit a rebuttal (the meta-review will clearly state where this is appropriate). INTERACT 2017 will include a shepherding process for papers which are conditionally accepted at the PC meeting.</p>
                            <div class="info yellow"><p>Submissions are now closed for Full Papers.<!-- deadline extended to January 31, 2017 23:59 GMT</p><p>You can submit the papers even if you have not submitted the abstract.--></p>
                            <p>At least one author for each accepted submission must register for the conference by <span class="bold">July 1, 2017</span> for the submission to be included in the proceedings.</p>
                            <p><a href="full-papers-accepted" class="info-cta">View Accepted Proposals</a></p>
                            </div>
                            <h3>Quick Info</h3>
                            <div class="quick-info">
                                <div class="left-sec">
                                    <div class="title">Abstract Submission</div>
                                    <div class="detail">January 17, 2017</div>
                                    <div class="title">Submission </div>
                                    <div class="detail">January 31, 2017 23:59 GMT</div>
                                    <div class="title">First Round of Reviews</div>
                                    <div class="detail">March 14, 2017</div>
                                    <div class="title">Rebuttals due (for borderline papers)</div>
                                    <div class="detail">March 20, 2017</div>
                                    <div class="title">Notification</div>
                                    <div class="detail">March 30, 2017</div>
                                    <div class="title">Camera-Ready</div>
                                    <div class="detail">May 18, 2017</div>
                                </div>
                                <div class="right-sec">
                                    <div class="title">Co-Chairs</div>
                                    <div class="detail">Regina Bernhaupt, Jacki O’Neill</div>
                                    <div class="title">E-mail</div>
                                    <div class="detail">fullpapers[at]interact2017[dot]org</div>
                                    <div class="title">Proceedings</div>
                                    <div class="detail"><?php include( "springer-lncs-link.php"); ?></div>
                                    <div class="title">No. of pages</div>
                                    <div class="detail">18 + max. 4 pages for references</div>
                                    <div class="title">Anonymous</div>
                                    <div class="detail">Yes</div>
                                    <div class="title">Submission Link</div>
                                    <div class="detail"><?php echo $precisionLinkStandalone; ?></div>
                                </div>
                            </div>
                            <p>
                                We invite you to pre-register your submission and upload an abstract by <span class="">January 17, 2017</span>. This year you are allowed to have four additional pages of references beyond the page limit. Therefore, authors are invited to submit full papers with a maximum limit of 18 pages (plus four pages of references), in PDF format by <del>January 17, 2017</del> the deadline now extended to <span class="text-highlight green">January 31, 2017 23:59 GMT</span>, using the <?php include( "pcs-link.php"); ?>. </p>
                            <h3>Guidelines</h3>
                            <section>
                                <p>Papers should be formatted according to <?php include( "springer-lncs-format.php"); ?>. Accepted full papers must be presented at the conference and will be published in Springer LNCS Series.
                                </p>
                                <p>
                                    Authors should guarantee the anonymity of their submissions. Please remove names and affiliations from the first page. Avoid obvious identifying statements in the paper. Citations to your own relevant work should not be anonymous, but rather should be done without identifying yourself as the author. For example, say "Prior work by [authors]" instead of "In our prior work."
                                </p>
                                <p>
                                    Full papers may optionally be accompanied by a video not exceeding 100 MB in size. Video figures will be published online and may be used for publicity.
                                
                                </p>
                            </section>
                            <section>
                            	<div class="info">
                            <h3>Demonstrations</h3>
<p>                            	To promote a holistic experience, INTERACT 2017 invites authors of accepted papers to also submit their work to <a href="demos">Demonstrations</a> track so that your work can be presented during the demo session. 
</p>
<p>If you have an accepted <span class="bold">Full Paper</span> that has demo-able contents, please make a demo submission using the submission system and mention in the abstract that a related Full Paper (with #submission number) has been accepted. 
</p>
<p>If you are submitting a <a href="short-papers">Short Paper</a> by April 19, you can also submit a corresponding demo and mention the submission number in the abstract.
</p>                            </div>
                            </section>
                        </article>
                    </div>
        </div>
        <?php include("footer.php"); ?>