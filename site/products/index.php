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
	echo '
		<div class="row">
			
			<!-- Item '.$i.' -->
				<div class="2u">
					<img src="../resources/images/item1.png" alt="Item 1" style="width: 100%;" />
				</div>
				
				<div class="4u">
					<h1 class="bBottom">Item '.$i.'</h1>
					<p>Text '.$i.'</p>
				</div>
			
			<!-- End Item '.$i.' -->
				
			<!-- Item 2 -->
			<div class="2u">
				<img src="../resources/images/item2.png" alt="Item 2" style="width: 100%;" />
			</div>
			
			<div class="4u">
				<h1 class="bBottom">Item '.$i.'</h1>
				<p>Text '.$i.'</p>
			</div>
			<!-- End Item '.$i.' -->
			
		</div>
		
		';
		
		
		?>
		<!-- End Body -->
			
	</div> <!-- End Wrapper -->

	<!-- Footer -->
	<?php include_once('../footer.php'); ?>
	<!-- End Footer -->	
	
</body>
<!-- End Body -->

</html>
