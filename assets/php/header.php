<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type='text/css' href="assets/css/style.css">
	</head>

	<body>
		<header>
			<a href="index.php" id="logo">
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
				<a href="support.php">Support</a>
			</nav>
		</header>