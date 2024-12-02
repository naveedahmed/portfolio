<?php
$pageTitle = "Installations - Accepted";
$pageDesc = "See the list of accepted Installations for the conference. These will be setup during the conference.";
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
                    <p><a href="installations" class="back-to">Go to Installations CFP</a>
                    </p>
                    <p>The list of accepted Installations for this year appear below. These will be setup during the conference.</p>
                    <!--
		<div class="info yellow">
			<p><span class="">Note for Authors:</span> At least one author for each accepted submission must register for the conference by <span class="bold">July 1, 2017</span> for the submission to be included in the proceedings.</span></p>
		</div>
-->

                    <section>
                        <h3>Accepted Installations</h3>
                        <ol class="paper-list">
                            <li>Conversations and Things - The pattern maker
                                <br><span class="subtle">By: Reeta Mehrishi, Anindita Saha, and Astha Johri</span></li>
                            <li>Data Jalebi Bot
                                <br><span class="subtle">By: Debanshu Bhaumik, Gaurav Patekar, Himanshu Bablani, and Karan Dudeja</span></li>
                            <li>Depth Data Visualization using Kinect and Processing
                                <br><span class="subtle">By: Katyayani Singh and Priyanka Rai</span></li>
                            <li>Insight-Out: Shaping Our World of Ideas
                                <br><span class="subtle">By: Chitra Chandrashekhar, Lakshmi Deshpande, Chinmayee Samant, Himanshu Goyal, and Rohit Soni</span></li>

                            <li>Project Air Draw
                                <br><span class="subtle">By: Prabhat Mahapatra and Nikhil Tailang</span></li>
                            <li>Snakes and Ladders: A Sonification
                                <br><span class="subtle">By: Hanif Baharin</span></li>
                            <li>Tick Tock
                                <br><span class="subtle">By: Yash Chandak</span></li>
                            <li>Who you are is what you get - A reflection on search and information gathering
                                <br><span class="subtle">By: Rohit Gupta</span></li>
                            <li>LAB'SURD: The LABoratory of SURvirtuality - <span class="withdrawn">Withdrawn</span>
                                <br><span class="subtle">By: Judith Guez and Guillaume Bertinet</span></li>
                        </ol>
                    </section>
                </article>
            </div>
    </div>
    <?php include( "footer.php" );
?>