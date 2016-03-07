<?php 
	include 'config/connect.php';
	session_start();

	// if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	// 	$ip = $_SERVER['HTTP_CLIENT_IP'];
	// } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	// 	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	// } else {
	// 	$ip = $_SERVER['REMOTE_ADDR'];
	// }
	// $timestamp = date("mdYish");
	// $submitID = $timestamp;
	// $query = "insert into pemesanan (id_pesan) values ('$submitID')";
	// $result = mysql_query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/animation.php';
		if (isset($_SESSION['currentUser'])) { ?>
			<script type="text/javascript">
				$(document).ready(function(){
				$('#ukuran').hide();
				$('#isi').hide();
				$('#isi').slideDown(500);
			});
			</script>
		<?php }
		if (!isset($_SESSION['currentUser'])) { ?>
			<script type="text/javascript">
				$(document).ready(function(){
				$('#ukuran').hide();
				$('#isi').hide();
				$('#ukuran').slideDown(500);
			});
			</script>
		<?php }
	?>
</head>
<body>
	<?php 
		if (isset($_SESSION['currentUser'])) {
			include 'process/harga.php';
		}
	?>
	<div class="wrapper">
		<?php 
		include 'layout/layout.php';
		?>
		<div id="sub-menu">
			<ul class="nav nav-pills" style="margin-left: 30%;padding-top: 20px;">
				<li class="active"><a href="pilih.php">Choose your T-shirt</a></li>
				<li><a href="#">Create your design </a></li>
				<li><a href="#">Submit</a></li>
			</ul>
		</div>
		<div id="ukuran" align="center">
			<?php include 'process/size.php' ?>
		</div>
		<div id="isi" align="center" style="padding-top:0;">
			<?php include 'process/baju.php' ?>
		</div>
    </div>
</body>
</html>