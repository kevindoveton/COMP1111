<!doctype html>
<html>

<!-- Start Head -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="We have all your pergola, decking, fencing need" />
<meta name="keywords" content="goodwood, lumberyard, pergola, decking, fencing, adelaide, lumber, timber" />
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
		
		<?php if ($_GET['cont'] != "true")
		{ ?>
		<div class="row">
			<div class="12u">
				<p class="tCenter">
					Request a quote and we'll get back to you asap.. or something like this.
				</p>
			</div>
		</div>
		<?php
		} ?>
		
		<div class="row">
			<div class="12u">
				<?php if ($_GET['cont'] != "true")
				{ ?>
				<form class="forms" action="./?cont=true" method="post">
					<div class="12u">
						<input name="name" type="text" placeholder="Name" class="oneHundredPercent"/>
					</div>
					
					<div class="12u">
						<input name="email" type="text" placeholder="Email Address" class="oneHundredPercent"/>
					</div>
					
					<div class="row">
					
					<?php
					for ($i = 1; $i < 13; $i++)
					{
						echo '
							<div class="4u">
								<p class="tGrey"><input type="checkbox">Item '.$i.'</p>
							</div>
							';
					}
					?>
					
					</div>
					
					<div class="12u">
						<input name="Dimension" type="text" placeholder="Dimensions (in square metres)" class="oneHundredPercent" />
					</div>
					
					<div class="12u">
					<textarea name="message" type="text" placeholder="Message" rows="5" class="oneHundredPercent"></textarea>
					</div>
					
					<div class="12u tCenter">
						<input type="submit" class="divCenter" style="margin: 0 auto;"/>
					</div>
				</form>
				<?php
				}
				else {
					echo "<p>Thank you for requesting a quote, we will get back to you within 24 hours<p>";
				} 
				?>
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
