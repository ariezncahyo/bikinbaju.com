<?php
	include 'config/connect.php';
    session_start();
    $submitID = $_SESSION['currentUser'];
    define('UPLOAD_DIR', 'submit/');
    $getUrl = $_POST['imgBase64'];
    $getUrl = str_replace('data:image/png;base64', '', $getUrl);
    $getUrl = str_replace(' ', '+', $getUrl);
    $gambar = base64_decode($getUrl);
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $gambar);
    // header("location:submit.php");
    // $url = '$getUrl';
    // $img = 'submit/images.png';
	// file_put_contents($img, file_get_contents($gambar));
?>