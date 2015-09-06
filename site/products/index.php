<!doctype html>
<html>

<!-- Start Head -->
<head>
<meta charset="UTF-8">
<title>Products || Goodwood Lumberyard</title>

<?php include_once('../resources/imports.php'); ?>

</head> <!-- End Head -->

<!-- Start Body -->
<body>
	
	<!-- Header -->
	<?php include_once('../header.php'); ?>
	<!-- End Header -->
	
	<div class="wrapper tWhite">
		
		
		
		<!-- Body -->
		<div class="row">
			<div class="12u">
				<h1 class="tCenter bBottom">Products</p>			
			</div>
		</div>
		
		<?php 
		for ($i = 0; $i < 4; $i++)
	echo '<div class="row">
			<div class="2u">
					<img src="../resources/images/item1.png" />
			</div>
			
			<div class="4u">
				<h1 class="bBottom">Item 1</h1>
				<p>Hello</p>
			</div>
			
			<div class="2u">
					<img src="../resources/images/item2.png" />
			</div>
			
			<div class="4u">
				<h1 class="bBottom">Item 2</h1>
				<p>T2</p>
			</div>
			
		</div>';
		
		
		?>
		<!-- End Body -->
			
	</div> <!-- End Wrapper -->

	<!-- Footer -->
	<?php include_once('../footer.php'); ?>
	<!-- End Footer -->	
	
</body>
<!-- End Body -->

</html>
