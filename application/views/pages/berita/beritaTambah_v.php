<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.minc.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style2.css">
    <script src="<?php echo base_url(); ?>asset/js/ckeditor/ckeditor.js"></script>
   
    <div class="container">
    <h2 style="text-align:center;">Tambah Berita</h2>
     <form action="<?php echo base_url();?>berita/tambah" method="post" enctype="multipart/form-data">
     <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="judul" placeholder="Tambah Judul">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="ckeditor" class="ckeditor" name="isi" placeholder="Tambah Isi"></textarea>
  </div>
  <div class="form-group">
	  <label>Category</label>
      <input type="text" class="form-control" name="kategori" placeholder="Tambah Kategori">
  </div>
  <div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
  <a href="<?php echo base_url();?>berita/beritahome" class="badge badge-danger float-center" ? style="padding:12px;font-size:13px;">Kembali</a>
</form>
    </div>
