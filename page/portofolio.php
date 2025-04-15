<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css"/>
	<link rel="icon" href="../assets/images/brand.png" type="image/x-icon"/>
	<title>Starbucks Coffee</title>
</head>
<body>	
	<div class="navigation">
		<div class = "starbucksBrand">
			<img src = "../assets/images/brand.png" title = "Starbucks">
		</div>
		<div class = "navbar">
			<a href = "../index.php" title="BERANDA">BERANDA</a>
		</div>

		<div class = "navbar">
			<a href="../profil.php" title="PROFIL">PROFIL</a>
		</div>

		<div class = "navbar">
			<a href="produk.php" title ="PRODUK">PRODUK</a>
		</div>

		<div class = "navbar">
			<a href="portofolio.php" title="PORTOFOLIO">PORTOFOLIO</a>
		</div>
	</div>
	<?php 
		echo "<div class ='mainPortofolio'>";
		if (isset($_GET['kategori'])){
			$kategori = $_GET['kategori'];
			if ($kategori == 'starbucksCoffee'){
			echo "<h1>Starbucks Coffee</h1>";
			echo "<br>";
			echo "<h3>An American multinational chain of coffeehouses and roastery reserves headquartered in Seattle, Washington. It was founded in 1971 by Jerry Baldwin, Zev Siegl, and Gordon Bowker at Seattle's Pike Place Market initially as a coffee bean wholesaler. Starbucks was converted into a coffee shop serving espresso-based drinks under the ownership of Howard Schultz, who was chief executive officer from 1986 to 2000 and led the aggressive expansion of the franchise across the West Coast of the United States.</h3>";
			}
			elseif ($kategori=='teavana') {
				echo "<h1>Teavana</h1>";
				echo "<br>";
				echo "<h3>An American tea company, which previously had locations throughout the United States, Canada, Mexico, and the Middle East. Starbucks acquired Teavana in 2012, and in 2017, Starbucks announced it would close all Teavana locations by 2018. As of 2022, a very limited variety of Teavana products continue to be sold at Starbucks.<br><br>Teavana offered hot tea sachets and premade iced tea which are sold at Starbucks locations, as well as at supermarkets and external retailers where tea is sold.</h3>";
			}
			elseif ($kategori=='evolutionFresh') {
				echo "<h1>Evolution Fresh</h1>";
				echo "<br>";
				echo "<h3>A former subsidiary of Starbucks Corporation, acquired by Bolthouse Farms in August 2022, is an American-based company producing fruit juices, fruit smoothies, gourmet soups, salads and signature bowls.<br><br>Evolution Fresh produces a line of super-premium, cold-pressed juices and in 2010 Evolution invested in a new form of pasteurization equipment, known as Pascalization or High pressure processing (HPP). Using HPP, the bottled juice is subject to thousands of pounds of pressure for preservation without exposing the product to heat that some believe could damage the juice's flavor, color and nutritional value.</h3>";
			}
			elseif ($kategori=='seattlesBestCoffee') {
				echo "<h1>Seattle’s Best Coffee</h1>";
				echo "<br>";
				echo "<h3>A subsidiary of Nestlé whose brand is used to sell wholesale coffee, ground coffee, and coffee K-cups. While this brand used to have coffeehouses in the United States, it no longer advertises them on its website. Some of these coffeehouses have converted to Starbucks while Starbucks previously owned this brand.Focus Brands owns the franchising rights for this brand's coffeehouses for international markets and military bases.<br><br>Seattle's Best Coffee is generally less expensive than Starbucks, its former parent, and is marketed as more of a working class coffee compared to the upmarket Starbucks.</h3>";
			}
			elseif ($kategori=='ethosWater') {
				echo "<h1>Ethos Water</h1>";
				echo "<br>";
				echo "<h3>An American brand of bottled water with a social mission of 'helping children get clean water.' A Starbucks subsidiary, Ethos began in 2001 when Peter Thum had the idea after working in communities in South Africa that lacked access to clean water. Thum, who was working as consultant for McKinsey & Company at the time, realized the potential to create a bottled water brand to raise awareness and funding for safe water programs. The idea became an obsession for Thum, and he wrote the business plan for Ethos, left McKinsey, and moved to New York in early 2002 to start the venture.</h3>";
			}
		}
		else{
			echo "<h1>Starbucks Coffee</h1>";
			echo "<br>";
			echo "<h3>An American multinational chain of coffeehouses and roastery reserves headquartered in Seattle, Washington. It was founded in 1971 by Jerry Baldwin, Zev Siegl, and Gordon Bowker at Seattle's Pike Place Market initially as a coffee bean wholesaler. Starbucks was converted into a coffee shop serving espresso-based drinks under the ownership of Howard Schultz, who was chief executive officer from 1986 to 2000 and led the aggressive expansion of the franchise across the West Coast of the United States.</h3>";
			echo "<br>";
			echo "<h1>Teavana</h1>";
			echo "<br>";
			echo "<h3>An American tea company, which previously had locations throughout the United States, Canada, Mexico, and the Middle East. Starbucks acquired Teavana in 2012, and in 2017, Starbucks announced it would close all Teavana locations by 2018. As of 2022, a very limited variety of Teavana products continue to be sold at Starbucks.<br><br>Teavana offered hot tea sachets and premade iced tea which are sold at Starbucks locations, as well as at supermarkets and external retailers where tea is sold.</h3>";
			echo "<br>";
			echo "<h1>Evolution Fresh</h1>";
			echo "<br>";
			echo "<h3>A former subsidiary of Starbucks Corporation, acquired by Bolthouse Farms in August 2022, is an American-based company producing fruit juices, fruit smoothies, gourmet soups, salads and signature bowls.<br><br>Evolution Fresh produces a line of super-premium, cold-pressed juices and in 2010 Evolution invested in a new form of pasteurization equipment, known as Pascalization or High pressure processing (HPP). Using HPP, the bottled juice is subject to thousands of pounds of pressure for preservation without exposing the product to heat that some believe could damage the juice's flavor, color and nutritional value.</h3>";
			echo "<br>";
			echo "<h1>Seattle’s Best Coffee</h1>";
			echo "<br>";
			echo "<h3>A subsidiary of Nestlé whose brand is used to sell wholesale coffee, ground coffee, and coffee K-cups. While this brand used to have coffeehouses in the United States, it no longer advertises them on its website. Some of these coffeehouses have converted to Starbucks while Starbucks previously owned this brand.Focus Brands owns the franchising rights for this brand's coffeehouses for international markets and military bases.<br><br>Seattle's Best Coffee is generally less expensive than Starbucks, its former parent, and is marketed as more of a working class coffee compared to the upmarket Starbucks.</h3>";
			echo "<br>";
			echo "<h1>Ethos Water</h1>";
			echo "<br>";
			echo "<h3>An American brand of bottled water with a social mission of 'helping children get clean water.' A Starbucks subsidiary, Ethos began in 2001 when Peter Thum had the idea after working in communities in South Africa that lacked access to clean water. Thum, who was working as consultant for McKinsey & Company at the time, realized the potential to create a bottled water brand to raise awareness and funding for safe water programs. The idea became an obsession for Thum, and he wrote the business plan for Ethos, left McKinsey, and moved to New York in early 2002 to start the venture.</h3>";
		}
		echo "</div>";

	 ?>
</body>
</html>