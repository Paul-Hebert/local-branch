<?php
	$title = 'Favorites';
	include('assets/php/header.php');

	include 'assets/php/plant_list.php';	
?>
		<div class="main-content" id="home">
			<h1>Favorites</h1>

			<div id="favorites">
				<?php 
					if ($_GET['ids'] === undefined){
						include('assets/php/empty.php');
					} else{
						$plant_ids = array_unique( explode(',', $_GET['ids']) );

						foreach ($plant_ids as $plant_count) {
							include('assets/php/plant_preview.php');
						}

						echo '<span class="button" id="clear_favorites">Clear Favorites</span>';
					}
				?>
			</div>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>