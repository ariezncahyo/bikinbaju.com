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
	<div class="wrapper">
		<?php include 'layout/layout.php' ?>
		<div id="sub-menu">
            <ul class="nav nav-pills" style="margin-left: 30%;">
                <li><a href="pilih.php">Choose your T-shirt</a></li>
                <li><a href="#">Choose your design </a></li>
                <li class="active"><a href="submit.php">Submit</a></li>
            </ul>
        </div>
		<div id="isi" align="center">
			<?php include 'process/submit.php' ?>
		</div>
    </div>
</body>
</html>