<html>
<title>WadeeCase</title>
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
<?php

date_default_timezone_set("Asia/Jakarta");
$n=12; 
function getName($n) { 
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	$randomString = ''; 

	for ($i = 0; $i < $n; $i++) { 
		$index = rand(0, strlen($characters) - 1); 
		$randomString .= $characters[$index]; 
	} 

	return $randomString; 
} 

$k = strtoupper(getName($n));
$m = date("hi");

?>


<style>
	body{
		font-family: sans-serif;
	}
	h2{
		color: #fff
	}

	.reg {
		padding: 1em;
		margin : 1em auto;
		width: 30em;
		background: #fff;
		border-radius: 3px;
	}

	label{
		font-size: 10pt;
		color: #555;	
	}

	input[type="text"],
	input[type="password"],
	input[type="text"],
	input[type="text"],
	textarea {
		padding: 8px;
		width: 95%;
		background: #efefef;
		border: 0;
		font-size: 10pt;
		margin: 6px 0px;
	}

	.trans{
		background : #3498db;
		padding 5px 8px;
		margin 20px 0px
		color: #fff;
		border: 0;
	}
	.sleding, img.coX {
		height: 768px;  /* bisa diganti : 100%, auto */
		width: 1024px;
		position: fixed;
		top: 0;
		left: 0;
		z-index:-9999;
	}
</style>
<body>
	<br/>
	<br/>
	<center>
		<img src ="<?php echo base_url('assets/logo.png'); ?>" height="190" width="190" />
	</center>
	<div class = "reg">
		<form action="<?= site_url('menu/pesan'); ?>" method="post">
			<div>
				<label></label><br>
				<input type="hidden" name="is" value="<?php echo $_SESSION['id']?> ">
			</div>
			<div>
				<label>Kode Pembayaran</label><br>
				<input type="text" name="kp" value="<?php echo $k,$m; ?>" readonly value="<?php echo $k,$m; ?>" required class="form-control" placeholder = "Nama"><br>
			</div>
			<div>
				<label>Nama Pemesan</label><br>
				<input type="text" name="n" value="<?php echo $_SESSION['nama']?> " required class="form-control" placeholder = "Nama"><br>
			</div>
			<div>
				<label>Alamat Pemesan</label>
				<input type="text" name="alamat" required class="form-control">
			</div>

			<div>
				<label>Typecase</label><br>
				<input type="text" name="f" value="<?= $nama ?>" readonly value="<?= $nama ?>" required class="form-control">
			</div>

			<div>
				<label>Tanggal Pemesanan</label><br>
				<input type="date" name="tgl" required class="form-control">
			</div>
			<br>
			<div>
				<label>Jasa Pengiriman</label><br>
				<select name="jasa" id="jasa" required class="form-control">
					<option >Pilih Jasa Pengiriman</option> 
					<option value="130000 JNE">JNE</option> 
					<option value="112000 JNT">JNT</option>
					<option value="110000 TIKI">TIKI</option>
					<option value="110000 SiCepat">SiCepat</option>
					<option value="110000 Pos Indonesia">Pos Indonesia</option>
				</select>
			</div>
			<br>
			<div>
				<label>Merk</label><br>
				<input type="text" name="lf" value="<?= $merk ?>" readonly value ="<?= $merk ?>" required class="form-control">
			</div>

			<br>
			<div>
				<label>Type Hp</label>
				<input type="text" name="typehp" required class="form-control">
			</div>
					<div>	
				<label for="lampiran">Gambar Custom</label>
				<div class="col-sm-10">
					<input type="file" id="exampleInputFile" name="uplot" required>
					<p class="help-block">Hanya gambar .JPG,.JPEG dan .PNG</p>
				</div>
				<div>
					<label>Harga</label><br>
					<input type="text" name="" placeholder = "0" id="harga" readonly value required class="form-control">
				</div>
				<center>
					<div>
						<input type="submit" value="Order" class="btn btn-success">

						<a href="<?PHP echo base_url('menu'); ?>" class="btn btn-warning">Batal</a>
					</div>
				</center>
			</form>

			<script>
				var select = document.getElementById('jasa')
				select.addEventListener('change', function(){
					document.getElementById('harga').value = select.value
				})
			</script>
			<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.10.2.js'); ?>"></script>
			<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
			<script src="<?php echo base_url('assets/bootstrap/js/jquery.backstretch.min.js'); ?>"></script>
			<script type="text/javascript">

			</script>
		</body>
		</html>
