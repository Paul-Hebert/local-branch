<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type='text/css' href="assets/css/style.css">

		<link rel="apple-touch-icon" sizes="57x57" href="assets/imgs/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="assets/imgs/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/imgs/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/imgs/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/imgs/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/imgs/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="assets/imgs/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/imgs/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="assets/imgs/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/imgs/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicons/favicon-16x16.png">
		<link rel="manifest" href="assets/imgs/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="assets/imgs/favicons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">		
	</head>

	<?php
		if ( isset($page_id) ){
			echo '<body id="' . $page_id . '">';
		} else{
			echo '<body>';
		}
	?>
		<header>
			<a href="index.php" class="logo">
				<span>Local</span> 
				<?php include('assets/svg/logo.php'); ?> 
				<span>Branch</span>
			</a>

			<div id="menu-toggle" class="mobile">
				<?php include('assets/svg/hamburger.php'); ?>
			</div>

			<nav>
				<a href="locations.php">Locations</a>
				<a href="plants.php?county=California&type=All">Plants</a>
				<a href="favorites.php" id="favorite_link">Favorites</a>
				<a href="add-a-plant.php">Add a Plant</a>
				<a href="contact.php">Contact</a>
			</nav>
		</header>

		<img src="assets/imgs/transparency30.png" id="mobile_modal">