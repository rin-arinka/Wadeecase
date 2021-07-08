<html>
<title>WadeeCase</title>
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

	.login {
		padding: 1em;
		margin : 2em auto;
		width: 25em;
		background: #fff;
	}

	label{
		font-size: 10pt;
		color: #555;	
	}

	input[type="text"],
	input[type="password"],
	textarea {
		padding: 8px;
		width: 95%;
		background: #efefef;
		border: 0;
		font-size: 10pt;
		margin: 6px 0px;
	}

	.tombol{
		background : #3498db;
		float : left;
		padding 5px 8px;
		margin 20px 0px;
		color: #fff;
		border: 0;

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

	
	<div class = "login">
		<form action="<?php echo site_url('landing/login'); ?>" method="post">
			<div>
				<label>Username</label><br>
				<input type="text" name="u" required class="form-control"><br>
			</div>
			<div>
				<label>Password</label><br>
				<input type="password" name="p" required class="form-control"><br><br>
			</div>
			<div>
				<button type="submit" class="btn btn-success btn-block">Login</button>
			</div>
		</form>
		<a href = "<?php echo base_url('register') ?>">
			<input type="submit" class = "btn btn-primary" value= "                              Register                             "> 		
		</a>	
	</div>
	<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.10.2.js'); ?>"></script>
	<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
	<script src="<?php echo base_url('assets/bootstrap/js/jquery.backstretch.min.js'); ?>"></script>
	<script type="text/javascript">

	</script>
</body>
</html>