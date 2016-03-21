<?php
	if( isset($_GET['county']) ){
		$county = $_GET['county'];
	} else{
		$county = 'California';
	}

	$title = 'Plants in ' . $county;
	include('assets/php/header.php');
?>
		<div class="main-content" id="home">
			<h1><?php echo $title; ?></h1>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>