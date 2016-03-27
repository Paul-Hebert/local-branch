<?php
	include 'assets/php/plant_list.php';

	if( isset($_GET['county']) ){
		$county = $_GET['county'];
	} else{
		$county = 'California';
	}

	$title = 'Plants in ' . $county;
	include('assets/php/header.php');
?>
		<div class="main-content">
			<?php 
				echo '<h1>' . $title . '</h1>';

				$plant_count = 0;

				foreach ($plants as $plant) {
					echo '<a class="plant_preview" href="plant.php?id=' . $plant_count . '">
						<div class="image_wrapper"><img src="assets/imgs/plants/' . $plant[2] .'"></div>
						<span class="preview_details">
							<div class="name">' . $plant[0] . '</div>
							<div class="latin_name">' . $plant[1] . '</div>
						</span>
					</a>';

					$plant_count ++;
				}

			?>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>