<!DOCTYPE html>
<?php
	include 'config/connect.php';
    session_start();
    // $query = "select * from gambar";
    // $result = mysql_query($query);
?>
<html>
<head>
	<?php include 'layout/animation.php' ?>
	<!-- javascript dan kineticjs untuk load memasukkan gambar ke kanvas -->
	<script defer='defer'>
        var xmlHTTP = mk_Obj();
        function mk_Obj(){
            var obj;
            if (window.XMLHttpRequest){
                obj = new XMLHttpRequest();
            }
            else{
                if (window.ActiveXObject){
                    obj = new ActiveXObject("Microsoft.XMLHTTP");
                }
            }
            return obj;
        };
        function ganti(){
            // var x = document.getElementById("cat").selectedIndex;
            var y = document.getElementById("warna").selectedIndex;
            // var getKategori = document.getElementsByTagName("option")[x].value;
            var getWarna = document.getElementsByTagName("option")[y].value;
            if (!getWarna) {
                return;
            }

            xmlHTTP.open('get','gantiGb.php?warna=' + getWarna, true);
            xmlHTTP.onreadystatechange = function(){
                if ((xmlHTTP.readyState==4)) {
                    document.getElementById("placeDesaign").innerHTML = xmlHTTP.responseText;
                }
            }
            xmlHTTP.send(null);
        }
    	function addGambar(url, panjang, lebar){
    		// alert(panjang)
    		var layer2 = new Kinetic.Layer();
    		var gbDesain = new Image();
            var setPanjang = panjang;
            var setLebar = lebar;
            gbDesain.src = url

    		gbDesain.onload = function(){
    			var desain = new Kinetic.Image({
    				x: 200,
    				y: 150,
    				Image: gbDesain,
    				width: setPanjang/7,
    				height: setLebar/7,
    				draggable: true
    			});

    			layer2.add(desain);
    			stage.add(layer2);
    		};
    	};
    </script>
</head>
<body>
    <?php
        if (isset($_SESSION['currentUser'])) {
            include 'process/harga.php';
        }
    ?>
	<div class="wrapper">
		<?php include 'layout/layout.php' ?>
        <div id="sub-menu">
            <ul class="nav nav-pills" style="margin-left: 30%;">
                <li><a href="#">Choose your T-shirt</a></li>
                <li class="active"><a href="#">Choose your design </a></li>
                <li><a href="submit.php">Submit</a></li>
            </ul>
        </div>
		<div id="isi" align="center" style="padding-bottom:0;">
			<?php include 'process/desain.php' ?>
		</div>
		<section>
        	<div id="addDesain" align="center">
        	   <div class="page-header">
                    <input type="button" id="save" value="Simpan Gambar">
                <script type="text/javascript">
                    document.getElementById('save').addEventListener('click', function() {
                        // var url = stage.toDataURL();
                    
                    // * since the stage toDataURL() method is asynchronous, we need
                    // * to provide a callback
                    
                    stage.toDataURL({
                    callback: function(dataUrl) {
                        /*
                        * here you can do anything you like with the data url.
                        * In this tutorial we'll just open the url with the browser
                        * so that you can see the result as an image
                        */
                        var url = dataUrl;
                        $.ajax({
                            type: "POST",
                            url: "saveGb.php",
                            data: {
                                imgBase64: url
                            }
                        }).done(function(o){
                            console.log('saved');
                        });
                    }
                });
                }, false);
                </script>
                    <!-- <select id="cat" name="pilihKtg" class="form-control" onchange="ganti()">
                        Kategori:   <option value="technology">Technology</option>
                                    <option value="transportation">Transportation</option>
                                    <option value="general">General</option>
                    </select> -->
                    <!-- <div class="kontrol-warna" align="center">
                        Color:  <button id="btn-hitam" class="hitam btn" value="hitam" onclick="chooseCat()"></input>
                                <button id="btn-putih" class="putih btn" value="putih" onclick="chooseCat1()"></button>
                                <button id="btn-pink" class="pink btn" value="pink" onclick="chooseCat2()"></button>
                                <button id="btn-biru" class="biru btn" value="biru" onclick="chooseCat3()"></button>
                    </div> -->
                    <h3>Choose your desain color</h3>
                    <select id="warna" name="pilihKtg" class="form-control" onchange="ganti()">
                        Kategori:   <option >pilih warna</option>
                                    <option value="hitam">Hitam</option>
                                    <option value="putih">Putih</option>
                                    <option value="pink">Pink</option>
                                    <option value="biru">Biru</option>
                    </select>
                    <div id="placeDesaign">
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>