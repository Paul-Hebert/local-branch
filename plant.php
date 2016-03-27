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
			<?php 
			echo '<div class="image_wrapper main"><img src="assets/imgs/plants/' . $plants[$id][2] .'"></div>
				<h1 class="name">' . $title .'</h1>';
			 ?>
			<p class="latin_name"><?php echo $latin_name; ?></p>

			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<span class='button'>Share</span>
			<span class='button'>Favorite</span>
			<?php
				echo '<a class="image_wrapper"><img src="assets/imgs/plants/' . $plants[0][2] .'"></a>';
				echo '<a class="image_wrapper"><img src="assets/imgs/plants/' . $plants[2][2] .'"></a>';
				echo '<a class="image_wrapper"><img src="assets/imgs/plants/' . $plants[3][2] .'"></a>';
				echo '<a class="image_wrapper"><img src="assets/imgs/plants/' . $plants[4][2] .'"></a>';
			?>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>