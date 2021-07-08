<html>
<title>Wadeecase</title>
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
<style>
	body/*{
		background: url("<?php echo base_url('assets/holiday.jpg');?>") no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		}*/
		h1.brand{
			font-size:50px;
			font-family: 'Oleo Script', cursive;
			text-shadow: 0px 2px 3px #f4f4f4;
		}
		.header{
			padding:8% 2%;
			font-size:24px;
			text-shadow: 0px 1px 0px #333;
		}
		.content{
			padding:2%;
			font-family: 'Oleo Script', cursive;
			text-shadow: 0px 2px 3px #f4f4f4;
		}
		.content p{margin:10px 0}
		.text{
			color: black;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
	$hasil = $data;
	?>
	<div class="header" align="center">
		<center><img src = "<?php echo base_url('admin/uploads/'.$hasil["foto_merk"]); ?>" height = "150px"></center>
		<br>
		<br>
		<h4><?= $hasil['tentang_merk'] ?></h4>
		<br>
		<br>
		<div class="container">
			<div class = "row">
				<?php 	
				foreach($dataf as $typecase) {					?>
					<div class = "col-5" align="right" >	
						<div class="card border-primary mb-3" style="max-width: 20rem;">
							<div class="card-header" align = "center"> <?php echo $typecase["nama"] ?>  </div>
							<a href = "<?php echo site_url('menu/transaksi/'.$typecase['nama'].'/'.$hasil['merk']);?>">
								<img src = "<?php echo base_url('admin/uploads/'.$typecase["foto"]); ?>" class="card-img-top" height = "500px">
							</a>
						</div>
					</div>
					<?php
				}
				?>
				
			</div>
		</div>
	</table>
</div>

</body>

</html>