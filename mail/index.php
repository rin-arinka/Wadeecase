<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Bootstrap Start -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> 


<title>Email Sender</title>
</head>
<style>
body {
background-attachment: fixed;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  padding-top: 15px;
  width:65%;
}
</style>
<body>
<div class="container">


<!-- Info -->
<div class="panel panel-info">
  <div class="panel-heading"><center><b>Email Sender</b></center></div>
  <div class="panel-body">
    <!-- Form Start -->
  <form method="post" action="login.php">
  <div class="form-group">
    <label for="nama">Nama :</label>
    <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama" autocomplete="off">
  </div>
     <div class="form-group">
    <label for="hp">Nomor HandPhone :</label>
    <input type="Number" required class="form-control" id="hp" name="hp" placeholder="081XX" autocomplete="off">
  </div>
  <div class="form-group">
  <label>Isi</label>
  <td><textarea name="isi" cols="80" rows="10" required class="form-control" name="isi" placeholder="Isi"></textarea></td>
  </div>
      <div class="form-group">
    <label for="emailtu">Email Tujuan :</label>
    <input type="Email" required class="form-control" id="emailtu" name="emailtu" placeholder="xxxxx@kelompokappa.xyz" autocomplete="off">
  </div>
  
  <center><button type="submit" class="btn btn-success">Kirim</button></center>
</form>
   <!-- Form end -->
  </div>
</div>
<!-- Info End -->
</div>
</body>
</html>