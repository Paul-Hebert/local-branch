<?php
	$title = 'Favorites';
	include('assets/php/header.php');

	include 'assets/php/plant_list.php';	
?>
		<div class="main-content" id="home">
			<h1>Favorites</h1>

			<?php 
				if ($_GET['ids'] === undefined){
					echo '
						<p>You don\'t have any plants in your favorites.</p>
						<a href="plants.php" class="button">View Plants</a>
					';
				} else{
					$plant_ids = array_unique( explode(',', $_GET['ids']) );

					foreach ($plant_ids as $plant_count) {
						include('assets/php/plant_preview.php');
					}
				}
			?>

		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>