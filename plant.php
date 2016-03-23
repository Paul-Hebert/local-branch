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
			echo '<div class="image_wrapper"><img src="assets/imgs/plants/' . $plants[$id][2] .'"></div>
				<h1>' . $title .'</h1>';
			 ?>
			<p class="accent"><?php echo $latin_name; ?></p>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>