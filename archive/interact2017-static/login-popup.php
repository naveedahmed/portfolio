<!--
NEED TO WORK ON THIS FILE.

THE CONTENT OF THIS FILE IS DUMMY
-->


<div class="modal fade" id="country-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
			

				<h4 class="modal-title" id="myModalLabel">Discount for Developing Countries</h4>
			</div>
			<div class="modal-body">
				<p>To encourage participants from developing countries, 100 participants from developing countries will be given an additional discount of <span class="bold">
                    <span class="inr">&#8377;<?php echo $developingCountryDiscount ?></span>
				


					<span class="usd">$<?php echo $developingCountryDiscountUSD ?></span>
					<span class="euro">&#8364;<?php echo $developingCountryDiscountEuro ?></span>
					</span>
					on Full Conference registrations.</p>

				<?php echo '<div class="info grey">Status: Only <strong>' .  $developingTicketsLeft . '</strong> of 100 Passes Left</div> '; ?>

				<p>These will be on a first-come-first-served basis and applicable at the time as per the <a href="http://en.unesco.org/creativity/sites/creativity/files/ifcd_list_developing_countries_eligible_7call_en_2016.pdf" target="_blank">IFCD List of Eligible Developing Countries</a>.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>