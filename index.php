<?php
	include 'config/connect.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/animation.php' ?>
</head>
<body>
	<?php
        if (isset($_SESSION['currentUser'])) {
            include 'process/harga.php';
        }
    ?>
	<div class="wrapper">
		<?php include 'layout/layout.php' ?>
		<div id="isi" align="center">
			<?php include 'process/start.php' ?>
		</div>

		<div class="footer">
			<?php include 'layout/footer.php' ?>
		</div>
    </div>
    
</body>
</html>