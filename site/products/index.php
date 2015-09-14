<!doctype html>
<html>

<!-- Start Head -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="We have all your pergola, decking, fencing need" />
<meta name="keywords" content="goodwood, lumberyard, pergola, decking, fencing, adelaide, lumber, timber" />
<title>Products || Goodwood Lumberyard</title>

<?php include_once('../resources/imports.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(function () {
        var centerImageVertically = function () {
            var imgframes = $('.fillDiv img');
            imgframes.each(function (i) {
                var imgVRelativeOffset = ($(this).height() - $(this).parent().height()) / 2;
                $(this).css({
                    'position': 'absolute',
                    'top': imgVRelativeOffset * -1
                });
            });
        };

        centerImageVertically();
        $(window).resize(centerImageVertically);
    });
</script>

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
				<h1 class="tCenter bBottom">Products</h1>			
			</div>
		</div>
		
		<!-- Row 1 -->
		<div class="row">
			<!-- Item 1 -->
				<div class="2u">
					<img src="../resources/images/decking.jpg" class="fillDiv" alt="Item 1" />
				</div>
						
				<div class="2u">
					<h1 class="bBottom">Decking</h1>	
					<p>Text '.$i.'</p>
				</div>		
			<!-- End Item 1 -->
						
			<!-- Item 2 -->
			<div class="2u">
				<img src="../resources/images/fencing.jpg" alt="Item 2" class="fillDiv" />
			</div>
					
			<div class="2u">
				<h1 class="bBottom">Fencing</h1>
				<p>Text '.$i.'</p>
			</div>
			<!-- End Item 2 -->
					
			<!-- Item 3 -->
			<div class="2u">
				<img src="../resources/images/stairs.jpg" alt="Item 2" class="fillDiv" />
			</div>
					
			<div class="2u">
				<h1 class="bBottom">Stairs</h1>
				<p>Text '.$i.'</p>
			</div>
			<!-- End Item 3 -->
						
		</div>
		<!-- End Row 1 -->
		
		<!-- Row 2 -->
		<div class="row">
			<!-- Item 4 -->
				<div class="2u">
					<img src="../resources/images/stairs.jpg" class="fillDiv" />
				</div>
						
				<div class="2u">
					<h1 class="bBottom">Pergolas</h1>	
					<p>Text '.$i.'</p>
				</div>		
			<!-- End Item 4 -->
						
			<!-- Item 5 -->
			<div class="2u">
				<img src="../resources/images/item2.png" alt="Item 2" class="fillDiv" />
			</div>
					
			<div class="2u">
				<h1 class="bBottom">Patios</h1>
				<p>Text '.$i.'</p>
			</div>
			<!-- End Item 5 -->
					
			<!-- Item 6 -->
			<div class="2u">
				<img src="../resources/images/item2.png" alt="Item 2" class="fillDiv" />
			</div>
					
			<div class="2u">
				<h1 class="bBottom">..</h1>
				<p>Text '.$i.'</p>
			</div>
			<!-- End Item 6 -->
						
		</div>
		<!-- End Row 2 -->

	</div> <!-- End Wrapper -->

	<!-- Footer -->
	<?php include_once('../footer.php'); ?>
	<!-- End Footer -->	
	
</body>
<!-- End Body -->

</html>
