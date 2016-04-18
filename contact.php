<?php
	$title = 'Contact';
	include('assets/php/header.php');
?>
		<div class="main-content" id="home">
			<h1>Contact</h1>

			<form>
				<section>
					<fieldset>
						<label for='your_name'>Your Name:</label>
						<input type="text" name="your_name" placeholder="John Doe">
					</fieldset>

					<fieldset>
						<label for='your_email'>Your Email:</label>
						<input type="email" name="your_name" placeholder="john@doe.com">
					</fieldset>	
					
					<fieldset>
						<label for='description'>Your Message:</label>
						<textarea name="description" rows="5" placeholder="Dear Local Branch,"></textarea>
					</fieldset>
				</section>								
				
				<input type="submit" value="Contact Us" class="button">
			</form>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>