<html>
    <title>Daftar WadeeCase</title>
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
		width: 17em;
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
		<form action="<?php echo site_url('register/daftar'); ?>" method="post">
		<div>
			<label>Username</label><br>
			<input type="text" name="user" required class="form-control"><br>
		</div>
	
		<div>
			<label>Password</label><br>
			<input type="password" name="pw" required class="form-control"><br><br>
		</div>
		<div>
			<label>Nomor Handphone</label><br>
			<input type="Number" name="hp" required class="form-control"><br><br>
		</div>
 	 <div>
			<label>Email</label><br>
			<input type="Email" name="mail" required class="form-control"><br><br>
		</div>
		<div>
			<button type="submit" class="btn btn-primary">Register</button>
		</div>
		</form>
	</div>
	<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.10.2.js'); ?>"></script>
		<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
<script src="<?php echo base_url('assets/bootstrap/js/jquery.backstretch.min.js'); ?>"></script>
<script type="text/javascript">

</script>
</body>
</html>