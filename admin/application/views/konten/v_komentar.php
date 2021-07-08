    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url('assets/komentar.css'); ?>">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?PHP echo $konten['judul']; ?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?PHP echo site_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?PHP echo site_url('konten/kategori'); ?>">Kategori konten</a></li>
        <li><a href="<?PHP echo site_url('konten/list_konten/'.$id_kat.'/'.$kat); ?>"><?PHP echo $kat; ?></a></li>
        <li><a href="<?PHP echo site_url('konten/edit/'.$id_kat.'/'.$kat.'/'.$konten['id'].'/'.$konten['link']); ?>"><?PHP echo $konten['judul']; ?></a></li>
        <li class="active">Komentar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Komentar untuk "<?PHP echo $konten['judul']; ?>"</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div class="row">
					<!-- Contenedor Principal -->
				    <div class="comments-container">
				    	<?PHP echo $komentar; ?>
					</div>
				</div>
            </div>
            <div class="box-footer">
              <a class="btn btn-success" href="<?PHP echo site_url('konten/tambah/'.$id.'/'.$kat); ?>"><i class="fa fa-plus"></i> Tambah</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
    <div id="reply" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Balas</h4>
	      </div>
	      <div class="modal-body">
	      		<?PHP echo form_open('konten/balas_komentar/'.$id.'/'.$kat); ?>
	      		<input type="hidden" name="url" value="<?php echo $link; ?>">
	      		<input type="hidden" name="konten_id" value="<?PHP echo $id; ?>">
	      		<input type="hidden" name="kom_id" value="" id="kom_id">
	        	<textarea placeholder="isi balasan anda" class="form-control" name="isi"></textarea>	
	      </div>
	      <div class="modal-footer">
	      	<button type="submit" class="btn btn-success">Kirim</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <?php echo form_close(); ?>
	      </div>
	    </div>

	  </div>
	</div>
    <script type="text/javascript">
    	function balas(id) {
    		$('#kom_id').val(id);
    		$('#reply').modal('show');
    	}
    </script>