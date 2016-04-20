<?php
	$title = 'Locations';
	include('assets/php/header.php');
?>
		<div class="main-content" id="home">
			<h1>Pick Your County</h1>
			<?php include('assets/php/county_dropdown.php'); ?>
			<div id="location_map">
				<?php include('assets/php/map.php'); ?>
			</div>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>