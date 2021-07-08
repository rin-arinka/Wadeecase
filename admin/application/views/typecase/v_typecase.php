    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TypeCase
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?PHP echo site_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Typecase</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Daftar TypeCase</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
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
                <td><?PHP echo $list_konten[$key]['nama'];?></td>
                <td>
                  <a href="<?PHP echo site_url('typecase/edit/'.$list_konten[$key]['id_typecase'].'/'.$list_konten[$key]['nama']); ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

                  <a href="<?PHP echo site_url('typecase/hapus/'.$list_konten[$key]['id_typecase'].'/'.$list_konten[$key]['nama']); ?>" class="btn btn-danger" onclick="return confirm('Yakin akan menghapusnya ?')"><i class="fa fa-trash"></i> Hapus</a>

                </td>
              </tr>
              <?PHP
              $i++;
            }
            ?>
          </tbody>
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