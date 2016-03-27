<?php
	$title = 'Locations';
	include('assets/php/header.php');
?>
		<div class="main-content" id="home">
			<h1>Pick Your County</h1>
			<div class="select_wrapper">
				<?php include('assets/php/county_dropdown.php'); ?>
				<span>&#9660;</span>
			</div>
			
			<?php include('assets/php/map.php'); ?>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>