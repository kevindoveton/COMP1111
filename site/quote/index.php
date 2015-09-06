<!doctype html>
<html>

<!-- Start Head -->
<head>
<meta charset="UTF-8">
<title>Request a Quote || Goodwood Lumberyard</title>

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
				<h1 class="bBottom tCenter">Quote</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="12u">
				<form class="form">
					<div class="12u">
						<input name="name" type="text" placeholder="Name" class="oneHundredPercent"/>
					</div>
					
					<div class="12u">
						<input name="email" type="text" placeholder="Email Address" class="oneHundredPercent"/>
					</div>
					
					<div class="12u tWhite">
					<?php
					for ($i = 1; $i < 11; $i++)
					{
						echo '<div class="4u">
							<input type="checkbox" class="">Item '.$i.
							'</div>';
					}
					?>
					</div>
					
					<div class="12u">
					<textarea name="message" type="text" placeholder="Message" rows="5" class="oneHundredPercent"></textarea>
					</div>
					
					<div class="12u">
						<input type="submit" class="divCenter" style="margin: 0 auto;"/>
					</div>
				</form>
			</div>
		</div>
		<!-- End Body -->
		
	</div> <!-- End Wrapper -->
	
	<!-- Footer -->
	<?php include_once('../footer.php'); ?>
	<!-- End Footer -->
	
	
</body>
<!-- End Body -->

</html>
