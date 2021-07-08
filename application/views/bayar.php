<html>
<title>Pembayaran</title>
<?php
if(!isset($_SESSION['auth'])){
	echo "<script>alert('Silahkan Login Dulu Gan !');window.location.href='".site_url('landing')."';</script>";
}  ?>
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
<style>
	body{
		background: #ffffff;
		font-family: sans-serif;
		-webkit-animation: color 5s ease-in  0s infinite alternate running;
		-moz-animation: color 5s linear  0s infinite alternate running;
		animation: color 5s linear  0s infinite alternate running;
	}
	h2{
		color: #fff
	}

	.Register {
		padding: 1em;
		margin : 2em auto;
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
	input[type="number"],
	input[type="email"],
	textarea {
		padding: 8px;
		width: 95%;
		background: #efefef;
		border: 0;
		font-size: 10pt;
		margin: 6px 0px;
	}


}
.link-button{
	background : #3498db;
	float : right;
	margin-top :-15px ;
	color: #fff;
	border: 0;
}
</style>
<body>
	<br/>
	<br/>
	<center>
		<img src ="<?php echo base_url('assets/logo.png'); ?>" height="200" width="200" />
	</center>

	
	<div class = "Register">
		<form action="<?php echo site_url('Bayar/daftar'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
			<div>
				<label for="kodebayar">Kode Pembayaran</label>
				<input type="text" name="kodebayar" class="form-control" placeholder="Kode Pembayaran"  required>
			</div>
			<br>
			<div>
				<label for="tanggalbayar"> Tanggal Bayar :</label>
				<br>
				<input type="date" name="tanggalbayar" class="form-control" placeholder="Tanggal Bayar"  required>
			</div>
			<br>
			<div>
				<label>Bank WadeeCase</label><br>
				<select name="banklensaku" required class="form-control">
					<option >Pilih Bank</option> 
					<option value="BCA">BCA-823849023</option> 
					<option value="MANDIRI">MANDIRI-23781923</option>
					<option value="BRI">BRI-9217368792</option>
				</select>
			</div>
			<br>
			<div>
				<label>Bank Anda</label><br>
				<select name="bankanda"  required class="form-control">
					<option >Pilih Bank</option> 
					<option value="BCA">BCA</option> 
					<option value="MANDIRI">MANDIRI</option>
					<option value="BRI">BRI</option>
				</select>
			</div>
			<br>

			<div>
				<label for="nomorrek">Nomor Rekening Anda</label>
				<input type="text" name="nomorrek" class="form-control" placeholder="Nomor Rekening Anda"  required>
			</div>
			<br>
			<div>
				<label for="atasnama">Atas Nama Rekening</label>
				<input type="text" name="atasnama" class="form-control" placeholder="Atas Nama Rekening"required>
			</div>
			<br>
			<div>
				<label for="nominal">Nominal</label>
				<input type="number" name="nominal" class="form-control" placeholder="Nominal Transfer"  required>
			</div>
			<br>
			<div>
				<label for="lampiran">Bukti Pembayaran</label>
				<div class="col-sm-10">
					<input type="file" id="exampleInputFile" name="uplot" required>
					<p class="help-block">Hanya gambar .JPG,.JPEG dan .PNG</p>
				</div>
			</div>
			<div>
				<center>
					<button type="submit" class="btn btn-success">Bayar</button>
					<a href="<?PHP echo base_url('menu'); ?>" class="btn btn-danger">Batal</a>
				</center>
			</div>
		</form>
	</div>

</body>
</html>
