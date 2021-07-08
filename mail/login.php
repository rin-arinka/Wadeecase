<?php


$subjek = 'EMAIL PEMBERITAHUAN KELOMPOKAPPA.XYZ';
$mailto = $_POST ['emailtu'];


$imel = $_POST['nama'];
$henpon = $_POST['hp'];
$is = $_POST['isi'];


$body = <<<EOD
<br><hr><br>

<h3>Nama : $imel</h3>
<h3>Handphone : $henpon</h3>
<h3>Isi : $is</h3>

<br><hr><br>
EOD;


$headers = "From: NoReply@kelompokappa.xyz\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers); // Hal-hal yang akan dikirim.
?>
<title> Thank You ! </title>
<center> <h2> Your Request Hasbeen Proccessed,Wait 24 Hours </h2><br>
<br>

	        <a class="nav-link" href="index.php">Kembali<span class="sr-only"></span></a>

</center>