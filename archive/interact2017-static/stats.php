<?php 
 $pageTitle = "Stats";
$pageDesc = "With the theme 'Global Thoughts, Local Designs,' INTERACT will be held in India for the first time in 2017.";

$pagePreviewImage = 'img/interact2017_preview.png';
	
include("header.php"); ?>

    <div class="content wrapper narrow">
        <article>
            <h2><?php echo $pageTitle ?></h2>
            <p>All the numbers and stats related to the event. This is a private page.</p>
            <h3>The Stats</h3>
            <section>
			<table width="99%" border="1" class="stats">
				<tbody>
					<tr>
						<td>Totals registrations so far</td>
						<td>165</td>
					</tr>
					<tr>
						<td>Super Early Registrations</td>
						<td>100</td>
					</tr>
					<tr>
						<td>Early Registrations</td>
						<td>50</td>
					</tr>
					<tr>
						<td>Full Conference Registrations</td>
						<td>100</td>
					</tr>
					<tr>
						<td>Student Registrations</td>
						<td>25</td>
					</tr>
					<tr>
						<td>Student Discounts Availed</td>
						<td>55</td>
					</tr>
					<tr>
						<td>Developing Country Discounts Availed</td>
						<td>50 out of 100</td>
					</tr>
					<tr>
						<td>Approx. Value to Registrations Sold</td>
						<td>
							<?php coursePricing(200000)?>
						</td>
					</tr>
				</tbody>
			</table>
            </section>
        </article>
    </div>

    <?php include("footer.php"); ?>