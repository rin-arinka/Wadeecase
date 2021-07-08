    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Typecase
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?PHP echo site_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?PHP echo site_url('typecase'); ?>">Typecase</a></li>
        <li class="active">Tambah Typecase</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-plus"></i> Form Tambah Typecase</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php echo form_open_multipart('typecase/action_edit/'.$konten['id_typecase'].'/'.$konten['link'] , array('class' => 'form-horizontal')); ?>
        <div class="box-body">
          <div class="form-group <?PHP if(form_error('nama')){echo 'has-error';} ?>">
            <label for="judul" class="col-sm-2 control-label">Nama</label>

            <div class="col-sm-10">
              <?php echo form_input(array('id' => 'judul', 'name' => 'nama', 'class' => 'form-control' ,'value' => $konten['nama'])); ?>
              <?php {echo form_error('judul');} ?>
            </div>
          </div>

          <div class="form-group">
            <label for="editor1" class="col-sm-2 control-label">Foto</label>

            <div class="col-sm-10">
              <div class="col-md-6" style="margin-bottom: 10px;">
                <img class="col-md-12" src="<?PHP echo base_url('uploads/'.$konten['foto']); ?>"
                style="width: 100%;height: 100%;" id="gambar-<?PHP echo $konten['nama']; ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="lampiran" class="col-sm-2 control-label">Ubah Foto</label>

            <div class="col-sm-10">
              <input type="file" id="exampleInputFile" name="uplot">
              <p class="help-block">Hanya gambar .JPG,.JPEG dan .PNG</p>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Simpan</button>
        </div>
        <!-- /.box-footer -->
        <?php echo form_close(); ?>
      </div>

    </section>
    <!-- /.content -->
    <script type="text/javascript">
      $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>