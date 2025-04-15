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
	<div class="main">
		<?php 
		$produk = array(
        1 => ["nama" => "Caffe Latte", "harga" => 53990],
        2 => ["nama" => "Cappuccino", "harga" => 55990],
        3 => ["nama" => "Caffe Mocha", "harga" => 51990],
        4 => ["nama" => "Caffe Americano", "harga" => 45990],
        5 => ["nama" => "Caramel Macchiato", "harga" => 55990]);

		if (isset($_GET['id'] , $_GET['nama'] , $_GET['harga'])){
			$id = $_GET['id'];
			$nama = $_GET['nama'];
			$harga = $_GET['harga'];
			if ($id == '1'){
				echo "<div class = 'starbucksBanner'>";
				echo "<img src = '../assets/images/1.jpg' title = 'Starbucks'>";
				echo "</div>";
				echo "<div class = 'mainProduk'>";
				echo "<h1>$nama</h1>";
				echo "<br>";
				echo "<h3>ID : $id</h3>";
				echo "<h2>Harga : Rp " , number_format($harga, 0, ',', '.') , "</h3>";
				echo "</div>";
			}
			elseif ($id=='2') {
				echo "<div class = 'starbucksBanner'>";
				echo "<img src = '../assets/images/2.jpg' title = 'Starbucks'>";
				echo "</div>";
				echo "<div class = 'mainProduk'>";
				echo "<h1>$nama</h1>";
				echo "<br>";
				echo "<h3>ID : $id</h3>";
				echo "<h2>Harga : Rp " , number_format($harga, 0, ',', '.') , "</h3>";
				echo "</div>";
			}
			elseif ($id=='3') {
				echo "<div class = 'starbucksBanner'>";
				echo "<img src = '../assets/images/3.jpg' title = 'Starbucks'>";
				echo "</div>";
				echo "<div class = 'mainProduk'>";
				echo "<h1>$nama</h1>";
				echo "<br>";
				echo "<h3>ID : $id</h3>";
				echo "<h2>Harga : Rp " , number_format($harga, 0, ',', '.') , "</h3>";
				echo "</div>";
			}
			elseif ($id=='4') {
				echo "<div class = 'starbucksBanner'>";
				echo "<img src = '../assets/images/4.jpg' title = 'Starbucks'>";
				echo "</div>";
				echo "<div class = 'mainProduk'>";
				echo "<h1>$nama</h1>";
				echo "<br>";
				echo "<h3>ID : $id</h3>";
				echo "<h2>Harga : Rp " , number_format($harga, 0, ',', '.') , "</h3>";
				echo "</div>";
			}
			elseif ($id=='5') {
				echo "<div class = 'starbucksBanner'>";
				echo "<img src = '../assets/images/5.jpg' title = 'Starbucks'>";
				echo "</div>";
				echo "<div class = 'mainProduk'>";
				echo "<h1>$nama</h1>";
				echo "<br>";
				echo "<h3>ID : $id</h3>";
				echo "<h2>Harga : Rp " , number_format($harga, 0, ',', '.') , "</h3>";
				echo "</div>";
			}
		}
		else{
			echo "<div class='allProduk'>";
			foreach ($produk as $id => $item) {
				echo "<div class = 'prdk'>";
				echo "<div class = 'starbucksBanner'>";
				echo "<img src = '../assets/images/$id.jpg' title = 'Starbucks'>";
				echo "</div>";
				echo "<div class = 'mainProduk'>";
				echo "<h1>{$item['nama']}</h1>";
				echo "<br>";
				echo "<h3>ID : $id</h3>";
				echo "<h2>Harga : Rp " , number_format($item['harga'], 0, ',', '.') , "</h3>";
				echo "</div>";
				echo "</div>"; sx`
			}
			echo "</div>";
		}
	 ?>
	</div>
</body>
</html>