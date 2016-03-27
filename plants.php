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
				echo '<h1>' . $title . '</h1>';

				$plant_count = 0;

				foreach ($plants as $plant) {
					include('assets/php/plant_preview.php');

					$plant_count ++;
				}

			?>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>