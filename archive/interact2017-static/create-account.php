<?php
	$pageTitle = "Create Account";
	$pageDesc = "To buy conference tickets, opt for workshop/courses, book accomodation etc. you need to have an account with us.";
 ?>



<?php include( "header.php"); ?>

<div class="content wrapper narrow">
	<article>
<!--
		<h2>
			<?php echo $pageTitle ?>
		</h2>
-->
	<section>
		<h2> Create Account </h2>

		<div id="email-verification-container">
			<p><strong>Email Verification</strong></p>

			<p>In order to proceed with the registration, we must verify your email first.<br/>
			You will receive a verification code in your mail.</p>
			

			<form>
				<img src="img/spinner.gif" id="available-spinner" />
				<input id="email-verification-textbox" class="verification-box" type="email" name="email-verification-textbox" placeholder="Enter your email"/>


				<input id="email-verification-submit" class="verification-button deactivated-button" type="submit" name="email-verification-submit" value="Send Verification Link">
			</form>

			<p id="verification-email-noexists-container" class="info yellow">
				<span class="error"><strong>This email is already registered.</strong></span><br/>
				Please <a class="blue-link" href="login.php">login</a> or if you have forgotten your password, click <a class="blue-link" href="iforgot.php">here</a>.
			</p>

			<p id="verification-email-exists-container" class="info green">
				Great! We just checked that this email id is not registered with us. <br/>
				Please send the verification link.
			</p>
		</div>

		<div id="verification-spinner-container">
				<p>Sending verification mail...</p>
				<img src="img/spinner.gif">
		</div>
	
		<div id="verification-error-container">
			<p class="info yellow">
				<span class="error"><strong>An Error Occured!</strong></span><br/>
				Please report this issue at <em><span style="color: #009cb1;">register@interact2017.org</span></em>
			</p>
		</div>
		


		<div id="check-your-email-container">
			<p><strong>Check your email</strong></p>

			<p class="info green">We have sent an email to <strong><span id="verification-email-sent-to"></span></strong> with a verification link.<br/><br/>Please check your email and click on that link to continue. <br/>If you do not find an email with this information, please check your spam folder or resend verification email. 
			</p>

			<p>
			If you need any help, please send an email to <em><span style="color: #009cb1;">register@interact2017.org</span></em> from this <strong><a href=""><span id="resend-email-link"></span></a></strong>. 
			</p>
		</div>




			
	</section>



</div>


<?php include( "footer.php"); ?>
