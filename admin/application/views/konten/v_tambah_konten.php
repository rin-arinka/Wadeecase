    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Merk
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?PHP echo site_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?PHP echo site_url('blog'); ?>">Merk</a></li>
        <li class="active">Tambah Merk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-plus"></i> Form Tambah Merk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('blog/action_tambah' , array('class' => 'form-horizontal')); ?>
              <div class="box-body">
                <div class="form-group <?PHP if(form_error('judul')){echo 'has-error';} ?>">
                  <label for="judul" class="col-sm-2 control-label">Nama Merk</label>

                  <div class="col-sm-10">
                    <?php echo form_input(array('id' => 'judul', 'name' => 'judul', 'class' => 'form-control')); ?>
                    <?php if($id == 7){echo form_error('Nama');}else{echo form_error('Judul');} ?>
                  </div>
                </div>

                  <div class="form-group">
                    <label for="editor1" class="col-sm-2 control-label"><?php echo form_label('Tentang'); ?></label>

                    <div class="col-sm-10">
                      <textarea id="editor1" name="isi" rows="10" cols="80">
                          
                      </textarea>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="lampiran" class="col-sm-2 control-label">Gambar</label>

                    <div class="col-sm-10">
                        <input type="file" id="exampleInputFile" name="uplot" required>
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