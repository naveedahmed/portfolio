<?php
$pageTitle = "Food Menu";
$pageDesc = "Food is an important part of the conference experience, and Indian hospitality derives a lot from its varied cuisine.";

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
			<section>
			<p>Food is an important part of the conference experience, and Indian hospitality derives a lot from its varied cuisine. INTERACT 2017 will provide lunch on all five days and we have narrowed down the menus based on lot of careful food tasting 'research' :). 
				<figure>
                    <img src="img/food_tasting.jpg" width="1000" alt="Our Chairs in a food tasting session" />
                    <figcaption>The food tasting session</figcaption>
                </figure>
				We have planned the following menu for the conference lunches and tea sessions. If you have any specific <span class="text-highlight">dietary restrictions</span>, please let us know on food[at]interact2017.org and we will order special things for you.</p>
			 
	<h3>The Food Menu</h3>
							<figure>
                    <a href="img/food/food_menu_interact2017.png" target="_blank"><img src="img/food/food_menu_interact2017.png" width="1000" alt="The Food Menu for the Conference" /></a>
                    <figcaption>The Food Menu for the Conference (<a href="img/food/food_menu_interact2017.png" target="_blank">View Larger Image</a>)</figcaption>
                </figure>	
<div class="info yellow food">
	We have also made a list of restaurants around the venue. <a href="https://goo.gl/nt4F84" target="_blank">Check it out here.</a>
</div>
	
			<h3>Menu Details</h3>
			<p>Select a day: 
			<select id="food-menu-select">
  <option value="day-1">Day 1, Sep 25 - Theme: Diwali</option>
  <option value="day-2">Day 2, Sep 26 - Theme: Holi</option>
  <option value="day-3">Day 3, Sep 27 - Theme: Navratri</option>
  <option value="day-4">Day 4, Sep 28 - Theme: Ganesh Chaturthi</option>
  <option value="day-5">Day 5, Sep 29 - Theme: Lohri</option>
</select>
			</p>
			<div class="food-menu-panel day-1-menu"><?php include("food-menu-day-1.php"); ?></div>
			<div class="food-menu-panel day-2-menu"><?php include("food-menu-day-2.php"); ?></div>
			<div class="food-menu-panel day-3-menu"><?php include("food-menu-day-3.php"); ?></div>
			<div class="food-menu-panel day-4-menu"><?php include("food-menu-day-4.php"); ?></div>
			<div class="food-menu-panel day-5-menu"><?php include("food-menu-day-5.php"); ?></div>
			
			
			
			
			
				
							
													</section>
		</article>
	</div>
</div>

<?php include( "footer.php" );?>