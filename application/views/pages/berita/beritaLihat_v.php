<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.minc.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style2.css">
<div class="container">

<a href="<?php echo base_url();?>berita/beritahome" class="badge badge-danger float-center" ? style="padding:12px;font-size:13px;">Kembali</a>
<h2><?php echo $berita['judul']; ?></h2>
<small class="post-date">Posted on: <?php echo $berita['tgl_buat']; ?></small><br>
<img src="<?php echo base_url();?>asset/images/berita/<?= $berita['image']; ?>" width="512">
<div class="post-body">
	<?php echo $berita['isi']; ?>
</div>

</div>