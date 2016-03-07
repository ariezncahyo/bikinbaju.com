<?php 
	include '../config/connect.php';
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
		$timestamp = date("mdYish");
		$_SESSION['currentUser'] = $timestamp;
	}
	if (!isset($_SESSION['currentUser'])) {
		die("location:pilih.php");
	}
	$submitID = $_SESSION['currentUser'];
	$ukuran = $_GET['size'];
	$qGetHarga = "select harga from ukuran where id_ukuran = '$ukuran'";
	$getKolomHarga = mysql_query($qGetHarga);
	$getHarga = mysql_fetch_row($getKolomHarga);
	$harga = $getHarga[0];
	$tambah = $query = "insert into submit (no_order, ukuran, total_bayar) values ('$submitID','$ukuran','$harga')";
	$result = mysql_query($tambah);
	if ($result) {
		header("location:../pilih.php");
		// echo "berhasil";
	}
	else{
		header("location:../index.php");
		// echo "gagal";
	}
?>