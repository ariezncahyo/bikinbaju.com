<?php 
	include 'config/connect.php';
	// $kategori = $_GET['kategori'];
	$warna = $_GET['warna'];
    $query = "select * from gambar where warna = '$warna'";
    $result = mysql_query($query);

	while ($gambar=mysql_fetch_array($result)) {
		?>
			<button onclick=
		<?php 
			$getURL=$gambar['url'];
			$getPanjang=$gambar['panjang'];
			$getLebar=$gambar['lebar'];
			echo "addGambar(".$getURL.",".$getPanjang.",".$getLebar.")";
		?>
			><img src=
		<?php 
			echo $gambar['url'];
		?> 
			width="70" height="10%">
			</button>
 <?php } ?>