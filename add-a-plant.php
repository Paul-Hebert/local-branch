<?php
	$title = 'Add a Plant';
	include('assets/php/header.php');
	include('assets/php/plant_list.php');
?>
		<div class="main-content">
			<h1>Submit a Plant</h1>

			<form id="contact_form" class="add-a-plant" method="POST" action="assets/php/submit_contact.php">
				<section>
					<fieldset>
						<label for='your_name'>Your Name:</label>
						<input type="text" name="your_name" placeholder="John Doe">
					</fieldset>

					<fieldset>
						<label for='your_email'>Your Email:</label>
						<input type="email" name="your_email" placeholder="john@doe.com">
					</fieldset>	
				</section>	

				<section>
					<fieldset>
						<label for='plant_name'>Plant's Name:</label>
						<input type="text" name="plant_name" placeholder="California Poppy">
					</fieldset>
					
					<fieldset>
						<label for='latin_name'>Latin Name:</label>
						<input type="text" name="latin_name" placeholder="Eschscholzia californica">
					</fieldset>		
					
					<fieldset>
						<label for='plant_type'>Plant Type:</label>
						<?php include('assets/php/plant_type_dropdown.php'); ?>
					</fieldset>	
					
					<fieldset>
						<label for='description'>Description:</label>
						<textarea name="description" rows="5" placeholder="It is a perennial or annual growing to 5–60 in (13–152 cm) tall, with alternately branching glaucous blue-green foliage. The leaves are alternately divided into round, lobed segments. The flowers are solitary on long stems, silky-textured, with four petals, each petal 2 to 6 cm (0.79 to 2.36 in) long and broad; flower color ranges from yellow to orange, with flowering from February to September in the northern hemisphere (spring, summer, autumn). The petals close at night or in cold, windy weather and open again the following morning, although they may remain closed in cloudy weather. The fruit is a slender, dehiscent capsule 3 to 9 cm (1.2 to 3.5 in) long, which splits in two to release the numerous small black or dark brown seeds. It survives mild winters in its native range, dying completely in colder climates."></textarea>
					</fieldset>	
					
					<!-- Deactivated until I can resolve security concerns of opening images from random submitters
					<fieldset>
						<label for='photo'>Photo:</label>
						<input type="file" name="photo">
					</fieldset>	
					-->
				</section>								
				
				<input type="submit" value="Add a Plant" class="button">
			</form>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>