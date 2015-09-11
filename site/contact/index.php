<!doctype html>
<html>

<!-- Start Head -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="We have all your pergola, decking, fencing need" />
<meta name="keywords" content="goodwood, lumberyard, pergola, decking, fencing, adelaide, lumber, timber" />
<title>Contact Us || Goodwood Lumberyard</title>

<?php include_once('../resources/imports.php'); ?>

</head> <!-- End Head -->

<!-- Start Body -->
<body>
	
	<!-- Header -->
	<?php include_once('../header.php'); ?>
	<!-- End Header -->

	<div class="wrapper">
		
		<!-- Body -->
		<div class="row">
			<div class="12u tWhite tCenter">
				<h1 class="bBottom">Contact Us</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="12u">
				<form class="forms" method="post" action="send.php">
					<div class="12u">
						<input name="name" id="name" type="text" placeholder="Name" class="oneHundredPercent"/>
					</div>
					
					<div class="12u">
						<input name="email" id="email" type="text" placeholder="Email Address" class="oneHundredPercent"/>
					</div>
					
					<div class="12u">
					<textarea name="message" type="text" placeholder="Message" rows="5" class="oneHundredPercent"></textarea>
					</div>
					
					<div class="12u tCenter">
						<input type="submit" class="" style=""/>
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
