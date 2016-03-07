<?php
        $submitID = $_SESSION['currentUser'];
        if (!isset($_SESSION['currentUser'])) {
                header("location:index.php");
        }
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
        <div class="col-lg-4">
                <form class="form-horizontal" role="form" method="POST" action="addSubmit.php">
                        <div class="form-group">
                                <label class="col-sm-2 control-label">No.Order</label>
                                <div class="col-sm-10">
                                        <input type="number" class="form-control" name="no_order" readonly="true" value="<?php echo $submitID; ?>">
                                        <p><font size="1">* Catat nomor order mu untuk keperluan konfirmasi pembayaran</font></p>
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label">TotalBayar</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" name="total_bayar" readonly="true" value=<?php echo $harga; ?>>
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" required/>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                        <textarea class="form-control" name="alamat" required></textarea>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label">No.Telepon</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_telp" required/>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label">No.Rekening</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_rek" required/>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label">URL</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" name="url" readonly="true">
                                </div>
                        </div>

                                <div class="col-sm-offset-2">
                                        <input class="btn btn-primary" type="submit" value="Simpan" />
                                        <input class="btn btn-warning" type="reset" value="Reset" />
                                        <input class="btn btn-danger" type="button" value="Batal" onclick=self.history.back() />
                                </div>
                        </form>
                </div>
        </body>
</html>