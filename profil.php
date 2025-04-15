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
	<div class="main">
		<div class = "starbucksBanner">
			<img src = "assets/images/banner.png" title = "Starbucks">
		</div>
		<div>
			<h1>About Us</h1>
			<br>
			<h3>Our Values</h3>
			<ul>
				Craft
				<li>We delight in the rigor of the details-no matter what our job is. </li>
				<li>We learn and teach in the pursuit of growth. </li>
				<li>We deliver excellence with passion and creativity. </li>
			</ul>
			<br>
			<ul>
				Results
				<li>We consistently achieve our goals with focus, integrity, and drive. </li>
				<li>We continuously innovate to stay ahead. </li>
				<li>We exceed the expectations of the people we serve. </li>
			</ul>
			<br>
			<ul>
				Joy
				<li>We take pride in our work and have fun while doing it. </li>
				<li>We celebrate each other and our wins. </li>
				<li>We create great vibes to bring the best out of others. </li>
			</ul>
		</div>
		<?php 
			echo "<div class='portofolio'>";
			echo "<h1>Brand Portfolio</h1>";
			echo "<br>";
			echo "<ul>
				<li><a href = 'page/portofolio.php?kategori=starbucksCoffee' id='port1'>Starbucks Coffee</a></li>
				<li><a href = 'page/portofolio.php?kategori=teavana' id='port2'>Teavana</a></li>
				<li><a href = 'page/portofolio.php?kategori=evolutionFresh' id='port3'>Evolution Fresh</a></li>
				<li><a href = 'page/portofolio.php?kategori=seattlesBestCoffee' id='port4'>Seattle’s Best Coffee</a></li>
				<li><a href = 'page/portofolio.php?kategori=ethosWater' id='port5'>Ethos Water</a></li>
				</ul>";
			echo "</div>";
		 ?>
	</div>
</body>
</html>