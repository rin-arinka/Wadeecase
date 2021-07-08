<html>
        <title>WadeeCase</title>
<head>
    <?php
    if(!isset($_SESSION['auth'])){
    echo "<script>alert('Silahkan Login Dulu !');window.location.href='".site_url('landing')."';</script>";
}  ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>"> -->
<style>
.btn{
    float: center;
}

body{
		background: #ffffff;
		font-family: sans-serif;
		-webkit-animation: color 5s ease-in  0s infinite alternate running;
		-moz-animation: color 5s linear  0s infinite alternate running;
		animation: color 5s linear  0s infinite alternate running;
		
	}
    
</style>



</head>
<body>
<center>
        <img src = "<?php echo base_url('assets/logo.png');?>" width = "200" height = "200" >
        <br>
        <br>
    </center>
  </div>
</div>
<center>
<div style="max-width: 70rem;">
    <div class="container">
       <table id="example" class="table table-striped table-bordered" width="100%">
    <tr>
        <th>No</th>
        <th>Kode Pembayaran</th>
        <th>Nama Pemesan</th>
        <th>Type Case</th>
        <th>Tanggal Pemesan</th>
        <th>Merk</th>   
        <th>Type Hp</th>
        <th>Total Harga</th>
        <th>Status</th>  
    </tr>
        <tr>
        <?php
        // print_r($datak);]
        $no = 0;
        foreach ($datak as $key => $value) {
            $no++;
            ?>
            <td style='vertical-align:middle; text-align:center;'><?php echo $no; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $datak[$key]['kode_pembayaran']; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $datak[$key]['nama_pemesan']; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $datak[$key]['nama']; ?> </td>                            
            <td style='vertical-align:middle; text-align:center;'><?php echo $datak[$key]['tanggal_pemesanan']; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $datak[$key]['merk']; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $datak[$key]['typehp']; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $datak[$key]['jasa']; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $datak[$key]['status_pemesanan']; ?> </td>
        </tr>
        </center>
</div>
        <?php } ?>              
                                            
</table>
        <center>
                <div class="pull-right">
                    <a href="<?PHP echo base_url('bayar'); ?>" class="btn btn-success">Bayar</a></td>
                   <a href="<?PHP echo base_url('menu'); ?>" class="btn btn-primary">Menu</a>
                </div>
        </center>
        


      
        <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->

</body>
</html>