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
					<p>Quality lumber for decks in your home and or any outdoor space, decks are great spaces to take advantage of wonderful weather and outdoor atmosphere. Priced per square meter.</p>
				</div>		
			<!-- End Item 1 -->
						
			<!-- Item 2 -->
			<div class="2u">
				<img src="../resources/images/fencing.jpg" alt="Item 2" class="fillDiv" />
			</div>
					
			<div class="2u">
				<h1 class="bBottom">Fencing</h1>
				<p>Cheap and effective wooden fencing, will last for years to come and garanteed to keep what you want in and what you want out. Priced per meter in length.</p>
			</div>
			<!-- End Item 2 -->
					
			<!-- Item 3 -->
			<div class="2u">
				<img src="../resources/images/stairs.jpg" alt="Item 2" class="fillDiv" />
			</div>
					
			<div class="2u">
				<h1 class="bBottom">Stairs</h1>
				<p>Quality wooden stairs for that old fashioned feel in your home or new building, guaranteed to last for years to come. Priced per square meter and cut to fit any design's specification.</p>
			</div>
			<!-- End Item 3 -->
						
		</div>
		<!-- End Row 1 -->
		
		<!-- Row 2 -->
		<div class="row">
			<!-- Item 4 -->
				<div class="2u">
					<img src="../resources/images/pergola.jpg" class="fillDiv" />
				</div>
						
				<div class="2u">
					<h1 class="bBottom">Pergolas</h1>	
					<p>Wood for the construction of outdoor Pergola's. A great combo with a deck or patio pegola's provided a shaded area for any outdoor space or a sturcture for vines and climbers. Priced per square meter.</p>
				</div>		
			<!-- End Item 4 -->
						
			<!-- Item 5 -->
			<div class="2u">
				<img src="../resources/images/patio.jpg" alt="Item 2" class="fillDiv" />
			</div>
					
			<div class="2u">
				<h1 class="bBottom">Patios</h1>
				<p>A Patio combines other materials with wood for an outdoor space or structure. Priced per square meter.</p>
			</div>
			<!-- End Item 5 -->
					
			<!-- Item 6 -->
			<div class="2u">
				<img src="../resources/images/sleepers.jpg" alt="Item 2" class="fillDiv" />
			</div>
					
			<div class="2u">
				<h1 class="bBottom">Sleepers</h1>
				<p>You need to build train tracks? We can provide high quality wooden sleepers for that old fashioned train track feel. Priced per Sleeper, price per depends on size of each.</p>
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
