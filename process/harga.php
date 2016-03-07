<?php
	$submitID = $_SESSION['currentUser'];
	include 'config/connect.php';
	$query = "select total_bayar from submit where no_order = '$submitID'";
	$row = mysql_query($query);
	$hasil = mysql_fetch_row($row);
	$harga = $hasil[0]; 
?>
<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
		<div class="show-harga">
		<p>Total Bayar:</p>
			<?php
				echo "IDR ".$harga;
			?>
		</div>
	</body>
</html>