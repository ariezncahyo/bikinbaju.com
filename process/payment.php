<!DOCTYPE html>

<html>
    <head>
    </head>

    <body>
        <p><font size="2">Silahkan Konfirmasi Pembayaran yang sudah kamu lakukan dengan memasukkan nomor order mu pada form berikut.</font></p>
        <div class="col-lg-4">
                <form class="form-horizontal" name="formulir" role="form" action="proses_payment.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                <label class="col-sm-3 control-label">No.Order</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_order" required/>
                                </div>
                        </div>
                       <!--  <div class="form-group">
                                <label class="col-sm-3 control-label">TotalBayar</label>
                                <div class="col-sm-10">
                                        <input type="number" class="form-control" name="total_bayar"/>
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama">
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-3 control-label">No.Telepon</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_telp">
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-3 control-label">No.Rekening</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_rek">
                                </div>
                        </div> -->

                        <div class="form-group">
                            <label for="exampleInputFile">File Upload</label>
                            <input type="file" name="nama_file" id="exampleInputFile" >
                            <p class="help-block"><font size="3">*upload bukti transfer kamu (.jpg / .png)</font></p>

                        <input type="submit" name="btn-simpan" class="btn btn-default" value="Submit">
                    </div>
                </form>
            </div>
        </body>
</html>