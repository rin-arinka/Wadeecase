<html>
<title>WadeeCase</title>
<head>

	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
	/* .bg-color{
		background-color :rgba(50, 115, 220, 0.3);
	}
	
	.bg-bawah{
		background: url("<?php echo base_url('assets/sea.jpg');?>");
		} */
		.sleding, img.coX {
			height: 768px;  /* bisa diganti : 100%, auto */
			width: 1024px;
			position: fixed;
			top: 0;
			left: 0;
			z-index:-9999;
		}

		
	</style>



</head>
<body>
	<center>
		<img src = "<?php echo base_url('assets/logo.png');?>" width = "200" height = "200" >
	</center>

</div>
</div>
<div class="container">
	<div class="container">
		<div class = "row">
			<?php
				foreach($data as $merk) { //perulangan dari variable row dengan nama wista jika data di database lokasi bertambah maka otomatis data disini bertambah
					?>
					
					<div class = "col-4">	
						<div class="card border-primary mb-3" style="max-width: 18rem;">
							<div class="card-header" align = "center"> <?= $merk["merk"] ?>  </div>
							<a href = "<?php echo site_url('menu/merk/'.$merk["id_merk"].'/'.$merk["merk"]); ?>">
								<img src = "admin/uploads/<?= $merk["foto_merk"]?>" class="card-img-top" height = "200px">
							</a>
						</div>
					</div>
					
					<?php
				}
				?>
				
			</div>
		</div>
		<br>
		<br>
		<center>
			<div class="pull-right">
				<a href="<?PHP echo base_url('landing/logout'); ?>" class="btn btn-danger">Log out</a>
				<a href="<?PHP echo base_url('history'); ?>" class="btn btn-success">History</a>
			</div>
		</center>
		


		<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.10.2.js'); ?>"></script>
		<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
		<script src="<?php echo base_url('assets/bootstrap/js/jquery.backstretch.min.js'); ?>"></script>
		<script type="text/javascript">
		</script>
	</body>
	</html>