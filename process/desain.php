<?php
if ($_GET["shirt"]==null) {
	header("location:pilih.php");
}
	$scrAll = explode(",", $_GET["shirt"]);

	$src1 = $scrAll[0];
	$src2 = $scrAll[1];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script defer='defer'>
// alert(<?php echo $src2; ?>)
	var stage = new Kinetic.Stage({
		container: 'isi',
		width: 890,
		height: 495
	});

	var layer1 = new Kinetic.Layer();
	var gambar = new Image();
	var gambar2 = new Image();

	gambar.src = <?php echo $src1; ?>;
	gambar2.src = <?php echo $src2; ?>;

	gambar.onload = function(){
		var depan = new Kinetic.Image({
			x: 10,
			y: 10,
			Image: gambar,
			width: 450,
			height: 465.5
		});

		var belakang = new Kinetic.Image({
			x: 400,
			y: 10,
			Image: gambar2,
			width: 450,
			height: 465.5
		});

		var textDepan = new Kinetic.Text({
			x: 190,
			y: 5,
			text: 'Tampak Depan',
			fontSize: '15',
			fontFamily: 'Calibri',
			fill: 'black'
		})

		var textBelakang = new Kinetic.Text({
			x: 590,
			y: 5,
			text: 'Tampak Belakang',
			fontSize: '15',
			fontFamily: 'Calibri',
			fill: 'black'
		})

		layer1.add(depan, textDepan, belakang, textBelakang);
		stage.add(layer1);
	};
	</script>
</body>
</html>