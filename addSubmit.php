<?php
	session_start();
	include 'config/connect.php';
	$submitID = $_SESSION['currentUser'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['no_telp'];
	$rek = $_POST['no_rek'];
	$add = "update submit set nama='$nama', alamat='$alamat', no_telp='$telp', no_rek=$rek where no_order = '$submitID'";
	$hasil = mysql_query($add);

	if ($hasil) {
		session_destroy();
		header("location:berhasil.php");
	}else{
		header("location:submit.php");
	}
?>