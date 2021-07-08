     <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Pemesanan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?PHP echo site_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Pemesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Daftar Pemesanan</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Pemesanan</th>
              <th>Kode Pembayaran</th>
              <th>Nama Pemesan</th>
              <th>Type Case</th>
              <th>Tanggal Pemesanan</th>
              <th>Harga dan Jasa Pengiriman</th>
              <th>Foto</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?PHP
            $i = 1;
            foreach ($list_konten as $key => $value) {
              ?>
              <tr>
                <td><?PHP echo $i; ?></td>
                <td><?PHP echo $list_konten[$key]['kode_pemesanan'];?></td>
                <td><?PHP echo $list_konten[$key]['kode_pembayaran'];?></td>
                <td><?PHP echo $list_konten[$key]['nama_pemesan'];?></td>
                <td><?PHP echo $list_konten[$key]['nama'];?></td>
                <td><?PHP echo $list_konten[$key]['tanggal_pemesanan'];?></td>
                <td><?PHP echo $list_konten[$key]['jasa'];?></td>
                <td><a href="<?PHP echo site_url('uploads/'.$list_konten[$key]['foto']); ?> "target="_blank" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Foto</a></td>

                <td><?PHP echo $list_konten[$key]['status_pemesanan'];?></td>
                <td>
                  <a href="<?PHP echo site_url('Pemesanan/action_lunas/'.$list_konten[$key]['kode_pemesanan']); ?>" class="btn btn-success"><i class="fa fa-check"></i> Accept</a>

                  <a href="<?PHP echo base_url('Pemesanan/action_cancel/'.$list_konten[$key]['kode_pemesanan']); ?>" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</a>

                </td>
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