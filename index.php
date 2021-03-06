<?php
	$title   = 'Local Branch';
	$page_id = 'home'; 
	include('assets/php/header.php');
?>
		<div class="main-content">
			<h1 class="logo desktop">
				<div>Local</div> 
				<div>Branch</div>				
				<?php include('assets/svg/logo.php'); ?> 
			</h1>

			<h2 class="accent">Think Globally. Plant Locally.</h2>

			<p>Local Branch is a web app that helps Californian home-owners find local plants for their gardens, so that they can save water and money while having a beautiful yard.</p>
			<a href="locations.php" class='button'>Choose Your Location</a>
			<a href="plants.php" class='button'>View Plants</a>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>