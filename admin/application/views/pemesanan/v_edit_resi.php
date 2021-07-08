

    <!-- Main content -->
    <section class="content">
      <div class="box box-info">
        

        <div class="box-body">
          <div class="form-group <?PHP if(form_error('resi')){echo 'has-error';} ?>">
            <label for="resi" class="col-sm-2 control-label">Resi</label>

            <div class="col-sm-10">
              <?php echo form_input(array('id' => 'judul', 'name' => 'resi', 'class' => 'form-control' ,'value' => $pemesanan['resi'])); ?>
              <?php {echo form_error('judul');} ?>
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