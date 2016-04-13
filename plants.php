<?php
	include 'assets/php/plant_list.php';

	if( isset($_GET['county']) ){
		$county = $_GET['county'];
	} else{
		$county = 'California';
	}

	if( isset($_GET['type']) ){
		$type = $_GET['type'];
	} else{
		$type = 'All';
	}	

	$title = 'Plants in ' . $county;
	include('assets/php/header.php');
?>

		<div class="main-content">
			<?php 
				echo '<h1>Plants in <span id="county">' . $county . '</span></h1>';

				include('assets/php/plant_type_dropdown.php');

				$plant_count = 0;

				foreach ($plants as $plant) {
					if ($type === 'All' || $type === $plant[4]){
						include('assets/php/plant_preview.php');
					}

					$plant_count ++;
				}

			?>

			<citation>Images courtesy of <a href="http://www.wikipedia.com">Wikipedia</a> under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons License</a>.</citation>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>