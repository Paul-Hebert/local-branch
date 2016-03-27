<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type='text/css' href="assets/css/style.css">
	</head>

	<body>
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
				<a href="plants.php">Plants</a>
				<a href="favorites.php">Favorites</a>
				<a href="contact.php">Contact</a>
			</nav>
		</header>