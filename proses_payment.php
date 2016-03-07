<?php
include 'config/connect.php';

$namafolder="payment/"; //tempat menyimpan file
if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$no_order=$_POST['no_order'];
	$jenis_gambar=$_FILES['nama_file']['type'];
	$cekdata1="select no_order from submit where no_order='$no_order'";
	$ada1=mysql_query($cekdata1) or die(mysql_error());
	$cekdata2="select no_order from payment where no_order='$no_order'";
	$ada2=mysql_query($cekdata2) or die(mysql_error());
	if(mysql_num_rows($ada1)==null){
		?>
		<script type="text/javascript">
			alert("Maaf, anda belum melakukan pesanan. Upload dibatalkan!");
			window.location.href='payment.php';
		</script>
		<?php
	}
	
	else if(mysql_num_rows($ada2)>0){
		?>
		<script type="text/javascript">
			alert("Maaf, anda sudah melakukan konfirmasi pembayaran. Upload dibatalkan!");
			window.location.href='payment.php';
		</script>
		<?php
	}
	else if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="insert into payment(no_order,nama_file) values ('$no_order','$gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			?>
			<script type="text/javascript">
			alert("No Order anda: <?php echo "$no_order"; ?> Upload berhasil. Pesanan anda akan segera kami proses. Terima Kasih");
			window.location.href='payment.php';
			</script>
			<?php		   
		} else {
			?>
			<script type="text/javascript">
			alert("Gambar gagal dikirim");
			window.location.href='payment.php';
			</script>
			<?php
		}
	} else {
		?>
		<script type="text/javascript">
		alert("Jenis gambar yang anda upload salah. Harus .jpeg .jpg .gif .png");
		window.location.href='payment.php';
		</script>
		<?php
	}
} else {
	?>
	<script type="text/javascript">
	alert("Anda belum memilih gambar");
	window.location.href='payment.php';
	</script>
	<?php
}
?>
