
<div class="row pTop tWhite" id="logoBar">
	<!-- Logo -->
	<div class="10u">
		<h1>Goodwood Lumberyard
	</div>
	<!-- End Logo -->

	<!-- Search Bar -->
	<div class="2u" style=" "id="searchBarDiv"></div>
	<!-- End Search Bar -->
</div>

<script type="text/javascript">
	var logoBar = document.getElementById("logoBar");
	var logoBarHeight = logoBar.clientHeight;
	var searchBarHTML = document.createElement('input');
	searchBarHTML.id = "searchBar";
	document.getElementById("searchBarDiv").appendChild(searchBarHTML);
	var searchBar = document.getElementById("searchBar");
	searchBar.style.margin = logoBarHeight/2 + "px";
	searchBar.style.width = "100%";
	searchBar.placeholder = "Search";
</script>


<!-- Menu -->
<div id="sse1">
	<div id="sses1">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/products/">Products</a></li>
			<li><a href="/quote/">Request a Quote</a></li>
			<li><a href="/about/">About Us</a></li>
			<li><a href="/contact/">Contact</a></li>
			<li><a href="/sitemap/">Sitemap</a></li>
		</ul>
	</div>
</div>
<!-- End Menu -->