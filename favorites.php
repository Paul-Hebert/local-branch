<?php
	$title = 'Favorites';
	include('assets/php/header.php');

	include 'assets/php/plant_list.php';	
?>
		<div class="main-content">
			<h1>Favorites</h1>

			<div id="favorites">
				<?php 
					if ($_GET['ids'] === undefined || $_GET['ids'] === ''){
						include('assets/php/empty.php');
					} else{
						$plant_ids = array_unique( explode(',', $_GET['ids']) );

						foreach ($plant_ids as $plant_count) {
							if ($plant_count !== ''){
								include('assets/php/plant_preview.php');
							}
						}

						echo '<span class="button" id="clear_favorites">Clear Favorites</span>';

						echo '<citation>Images courtesy of <a href="http://www.wikipedia.com">Wikipedia</a> under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons License</a>.</citation>';
					}
				?>
			</div>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>