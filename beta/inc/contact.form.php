<!-- Requires jQuery -->
<section id="contact">
	<script>
		$(function () {
			$('#form-message').hide();
			var submitBtn = $('#submit');
			var form = $('#ajax-form');
			$(form).submit(function (event) {
				$.ajax({
					type: 'POST',
					url: './res/scripts/mailer.php',
					data: form.serialize(),
					success: function () {
						$('#ajax-contact-div').hide();
						$('#form-message').fadeIn();
					}
				});
				event.preventDefault();
			});
		});
    </script>
	<p id="form-message" class="w3-center w3-padding-128 w3-text-green w3-large">Thank you for the email.</p> <!-- TODO: make same height as #ajax-contact-div -->
	<div id="ajax-contact-div" class="container">
		<form id="ajax-form">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Contact Us</h2>
					<h3 class="section-subheading text-muted">Send us an email and we will try our best to get back to you.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
						<p class="help-block text-danger"></p>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-lg-12 text-center">
					<input id="submit" name="submit" type="submit" value="Send Email" class="w3-btn w3-padding-16 w3-small w3-margin-top">
				</div>
			</div>
		</form>
	</div>
</section>

<script src="<?php echo JS_PATH . 'jqBootstrapValidation.js'?>"></script>
<script src="<?php echo JS_PATH . 'contact_me.js'?>"></script>