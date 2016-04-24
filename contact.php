<?php
	$title = 'Contact';
	include('assets/php/header.php');
?>
		<div class="main-content">
			<h1>Contact</h1>

			<form method="POST" action="assets/php/submit_contact.php" id="contact_form">
				<section>
					<fieldset>
						<label for='your_name'>Your Name:</label>
						<input type="text" name="your_name" placeholder="John Doe">
					</fieldset>

					<fieldset>
						<label for='your_email'>Your Email:</label>
						<input type="email" name="your_email" placeholder="john@doe.com">
					</fieldset>	

					<fieldset>
						<label for='your_subject'>Your Subject:</label>
						<input type="text" name="your_subject" placeholder="Hey there">
					</fieldset>	
					
					<fieldset>
						<label for='your_message'>Your Message:</label>
						<textarea name="your_message" rows="5" placeholder="Dear Local Branch,"></textarea>
					</fieldset>
				</section>								
				
				<input type="submit" value="Contact Us" class="button">
			</form>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>