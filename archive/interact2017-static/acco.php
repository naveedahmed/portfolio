<?php 
 $pageTitle = "Accommodation";
$pageDesc = "All the information about the venue that you may need before, during and after the conference.";

$pagePreviewImage = 'img/interact2017_preview.png';
	
include("header.php"); ?>
        
           
    <div class="content wrapper">
    <?php include("attending-nav.php"); ?>
		<div class="right-col">
        <article>
            <h2><?php echo $pageTitle ?></h2>
            <section>
              <p>IIT Bombay is located in Powai in Mumbai which is known as India's latest startup hub. Due to the presence of a large number of IT and ITES firms in the area, one can opt for one of the many hotels available. Areas near Powai include Andheri, Ghatkopar and Vikhroli where one can find affordable accommodation. Delegates can also look into alternatives like Airbnb.</p>
              <p>A curated list of accommodation options is available below and this can be availed during the registration process. Delegates who have already registered must login to purchase these options.</p>
              
               <p><span class="bold">Please note</span> that the delegate fee alone does not include the cost for board and lodging.</p>
				<?php include("acco_list.php"); ?>
               <h3>Hotels near the Venue</h3>
               <p>A generic list of accommodation option around the <a href="venue">conference venue</a>.</p>
               <figure>
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30157.481932808776!2d72.8822605085694!3d19.12145949745884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shotels+near+iit+bombay!5e0!3m2!1sen!2s!4v1484217170594" width="99%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                 <figcaption>A quick view of hotels near IIT Bombay</figcaption>
                </figure>
            </section>
        </article>
        </div>
    </div>


    <?php include("footer.php"); ?>