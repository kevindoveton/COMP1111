<!doctype html>
<html>

<!-- Start Head -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="We have all your pergola, decking, fencing need" />
<meta name="keywords" content="goodwood, lumberyard, pergola, decking, fencing, adelaide, lumber, timber" />

<title>Goodwood Lumberyard</title>

<?php include_once('resources/imports.php'); ?>

</head> <!-- End Head -->

<!-- Start Body -->
<body>
	<!-- Header -->
	<?php include_once('header.php'); ?>
	<!-- End Header -->
	
	<div class="wrapper">
		<!-- Body -->
		<div class="row">
			<div class="12u">
				<h1 class="tCenter bBottom tWhite">Goodwood Lumberyard</h1>
			</div>
			
			<div class="12u">
				<p class="tWhite">
				Short intro to the company
				</p>
			</div>
		</div>
		
		<div class="row">
			<div class="2u">
				<!-- Blank div to create space -->
			</div>
			
			<div class="8u">
				<!-- google map embed -->
				<div id="googleMapEmbed"></div>
			</div>
		</div>
		<!-- End Body -->
	</div> <!-- End Wrapper -->
	
	<!-- Footer -->
	<?php include_once('footer.php'); ?>
	<!-- End Footer -->
	
	
</body>
<!-- End Body -->

<!-- Javascript -->
<script>
window.onload = function() {
    var googleDiv = document.getElementById("googleMapEmbed");
    var iframe = document.createElement('iframe');
    iframe.style.display = "block";
	iframe.style.width = "100%";
	iframe.style.height = window.outerHeight/3 + "px"; 
	iframe.style.border = "0";
	iframe.setAttribute("allowFullScreen", '');
	iframe.setAttribute('frameborder', '0');
    iframe.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d815.2525894038392!2d138.7586140784543!3d-35.18129439125706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab12b3a28773e05%3A0xe03365545bac950!2sKuitpo+Forest+Reserve%2C+South+Australia!5e0!3m2!1sen!2sau!4v1440295132825";
    googleDiv.appendChild(iframe);
};
</script>



</html>
