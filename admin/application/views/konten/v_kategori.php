    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori konten
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?PHP echo site_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Kategori konten</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Kaetegori</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul kategori</th>
                  <th>Jumlah konten</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?PHP
                  $i = 1;
                    foreach ($list_kategori as $key => $value) {
                      ?>
                      <tr>
                        <td><?PHP echo $i; ?></td>
                        <td><?PHP echo $list_kategori[$key]['judul'];?></td>
                        <td><?PHP echo $list_kategori[$key]['jumlah'];?></td>
                        <td>
                          <?PHP
                            if($list_kategori[$key]['status'] == 'open'){
                          ?>
                          <a href="<?PHP echo site_url('konten/kategori/edit/'.$list_kategori[$key]['id'].'/'.$list_kategori[$key]['judul']); ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

                          <a href="<?PHP echo base_url('konten/kategori/hapus/'.$list_kategori[$key]['id'].'/'.$list_kategori[$key]['judul']); ?>" class="btn btn-danger" onclick="return confirm('Yakin akan menghapusnya ?')"><i class="fa fa-trash"></i> Hapus</a>
                          <?PHP
                              }else if($list_kategori[$key]['status'] == 'partial'){
                                ?>
                                <a href="<?PHP echo site_url('konten/kategori/edit/'.$list_kategori[$key]['id'].'/'.$list_kategori[$key]['judul']); ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                <?PHP
                              }else{
                              echo "<i>locked<i>";
                              }
                          ?>
                        </td>
                      </tr>
                      <?PHP

                    $i++;
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>No</th>
                  <th>Judul kategori</th>
                  <th>Jumlah konten</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
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