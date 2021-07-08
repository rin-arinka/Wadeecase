    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pembayaran
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?PHP echo site_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Pembayaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Pembayaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pembayaran</th>
                  <th>Tanggal Bayar</th>
                  <th>Bank User</th>
                  <th>Norek User</th>
                  <th>Atas Nama Pengirim</th>
                  <th>Bank Penerima</th>
                  <th>Nominal</th>
                  <th>Bukti</th>
                  <!-- <th>Bukti</th> -->
                </tr>
                </thead>
                <tbody>
                  <?PHP
                  $i = 1;
                    foreach ($list_konten as $key => $value) {
                      ?>
                      <tr>
                        <td><?PHP echo $i; ?></td>
                        <td><?PHP echo $list_konten[$key]['kode_pembayaran'];?></td>
                        <td><?PHP echo $list_konten[$key]['tanggal_bayar'];?></td>
                        <td><?PHP echo $list_konten[$key]['bank_user'];?></td>
                        <td><?PHP echo $list_konten[$key]['norek_user'];?></td>
                        <td><?PHP echo $list_konten[$key]['an_user'];?></td>
                        <td><?PHP echo $list_konten[$key]['bank_penerima'];?></td>
                        <td><?PHP echo $list_konten[$key]['nomial'];?></td>
                        <td><a href="<?PHP echo site_url('uploads/'.$list_konten[$key]['bukti']); ?> "target="_blank" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Bukti</a></td>
                       <!--  <td><img src="<?php echo base_url().'uploads/'.$list_konten[$key]['bukti']  ?>"/ width="50px" height="50px"> -->
                      </tr>
                      <?PHP
                    $i++;
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="box-footer">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
    <script type="text/javascript">
        $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
    </script>