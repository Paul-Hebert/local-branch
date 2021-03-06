<?php
	include 'assets/php/plant_list.php';

	if( isset($_GET['county']) ){
		$county = $_GET['county'];
	} else{
		$county = 'California';
	}

	if( isset($_GET['type']) && $_GET['type'] !== '' ){
		$type = $_GET['type'];
	} else{
		$type = 'All';
	}	

	if ($type === 'All'){
		$title = 'Plants in ' . $county;
	} else{
		$title = $type . ' in ' . $county;		
	}
	include('assets/php/header.php');
?>

		<div class="main-content">
			<?php 
				if ($type === 'All'){
					echo '<h1>Plants in <span id="county">' . $county . '</span></h1>';
				} else{
					echo '<h1><span id="type">' . $type . '</span> in <span id="county">' . $county . '</span></h1>';
				}
			
				include('assets/php/county_dropdown.php');

				echo '<div id="plant_type_dropdown">';
					include('assets/php/plant_type_dropdown.php');
				echo '</div>';

				$plant_count = 0;
				$featured_plants = false;

				foreach ($plants as $plant) {
					if ($type === 'All' || $type === $plant[4]){
						$native = false;
						
						if ($county === 'California'){
							$native = true;
							$featured_plants = true;
						} else{
							foreach($plant[6] as $plant_county){
								if ($plant_county . ' County' === $county){
									$native = true;
									$featured_plants = true;							
								}
							}						
						}

						if ($native === true){
							include('assets/php/plant_preview.php');						
						}
					}

					$plant_count ++;
				}

				if ($featured_plants === false){
					echo '<h2>Sorry!</h2>
					<p>No plants of this type were found in this county.</p>
					<p>Know a plant that should be here? Please <a href="add-a-plant.php">submit</a> the plant so we can add it to the site.</p>
					<a class="button" href="add-a-plant.php">Add a Plant</a>';
				} else{
					echo '<citation>Images courtesy of <a href="http://www.wikipedia.com">Wikipedia</a> under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons License</a>.</citation>';
				}
			?>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>