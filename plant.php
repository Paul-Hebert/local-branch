<?php
	include 'assets/php/plant_list.php';

	if( isset($_GET['id']) ){
		$id = $_GET['id'];
	} else{
		$id = '0';
	}

	$title = $plants[$id][0];
	$latin_name = $plants[$id][1];
	include('assets/php/header.php');
?>
		<div class="main-content">
			<div class="plant">
			<?php 
				echo '<div class="image_wrapper main"><img src="assets/imgs/plants/' . $plants[$id][2] .'" class="' . $plants[$id][3] . '"></div>
				<h1 class="name">' . $title .'</h1>';
			 ?>

			<p class="latin_name"><?php echo $latin_name; ?></p>

			<p class="description"><?php echo $plants[$id][5] ?></p>

			<div id="plant_map">
				<?php include('assets/php/map.php'); ?>
			</div>

			<?php 
				echo '
					<!--<a class="button" href="share.php?id=' . $id . '">Share</a>-->
					<a class="button" id="favorite" data-id="' . $id . '">Favorite</a>
				';

				for ($count = 0; $count <= 3; $count++){
					if ( $count == $id ){
						echo '<a href="plant.php?id=' . (count($plants) - 1) . '" class="image_wrapper more_plants"><img src="assets/imgs/plants/' . $plants[count( $plants ) - 1 ][2] .'" class="' . $plants[count( $plants ) - 1 ][3] . '"></a>';						
					} else{
						echo '<a href="plant.php?id=' . $count . '" class="image_wrapper more_plants"><img src="assets/imgs/plants/' . $plants[$count][2] .'" class="' . $plants[count( $plants ) - 1 ][3] . '"></a>';
					}
				}
			?>
			
			<br>

			<citation>Images and information courtesy of <a href="http://www.wikipedia.com">Wikipedia</a> under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons License</a>.</citation>
			</div>
		</div>

		<?php 
			include('assets/php/scripts.php'); 
			echo '<script type="text/javascript">initialize_plant_map(' . json_encode($plants[$id][6]) . ')</script>';
		?>

	</body>
</html>