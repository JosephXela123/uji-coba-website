<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
	<link rel="icon" href="assets/images/brand.png" type="image/x-icon"/>
	<title>Starbucks Coffee</title>

</head>
<body>	
	<div class="navigation">
		<div class = "starbucksBrand">
			<img src = "assets/images/brand.png" title = "Starbucks">
		</div>
		<div class = "navbar">
			<a href = "index.php" title="BERANDA">BERANDA</a>
		</div>

		<div class = "navbar">
			<a href="profil.php" title="PROFIL">PROFIL</a>
		</div>

		<div class = "navbar">
			<a href="page/produk.php" title ="PRODUK">PRODUK</a>
		</div>

		<div class = "navbar">
			<a href="page/portofolio.php" title="PORTOFOLIO">PORTOFOLIO</a>
		</div>

	</div>
	<div class="mainBeranda">
		<div class = "starbucksBanner">
			<img src = "assets/images/banner.png" title = "Starbucks">
		</div>
		<?php 
		echo "<div class = 'beranda'>";
		echo "<div>";
		echo "<h2 class='story'>Our story began in 1971. Back then we were a roaster and retailer of whole bean and ground coffee, tea and spices with a single store in Seattle’s Pike Place Market. Today, we are privileged to connect with millions of customers every day in more than 80 markets. <br><br>Starbucks is named after the first mate in Herman Melville’s “Moby-Dick.” Our logo is also inspired by the sea – featuring a twin-tailed siren from Greek mythology.</h2>";
		echo "</div?>";
		echo "</div?>";
		echo "<div class='produk'>";
		echo "<h1>Our Produk</h1>";
		echo "<br>";
		echo "<ul>
			<li><a id='prd1' href= 'page/produk.php?id=1&nama=Caffe Latte&harga=53990'>Caffe Latte</a></li>
			<li><a id='prd2' href= 'page/produk.php?id=2&nama=Cappuccino&harga=55990'>Cappuccino</a></li>
			<li><a id='prd3' href= 'page/produk.php?id=3&nama=Caffe Mocha&harga=51990'>Caffe Mocha</a></li>
			<li><a id='prd4' href= 'page/produk.php?id=4&nama=Caffe Americano&harga=45990'>Caffe Americano</a></li>
			<li><a id='prd5' href= 'page/produk.php?id=5&nama=Caramel Macchiato&harga=55990'>Caremel Macchiato</a></li>
			</ul>";
		echo "</div?>";
		echo "</div>";
	 ?>
	</div>
	
</body>
</html>