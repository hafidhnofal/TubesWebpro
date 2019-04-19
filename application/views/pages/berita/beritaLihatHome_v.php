<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.minc.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style2.css">
<div class="container">
<br>
<a href="<?php echo base_url();?>" class="badge badge-danger float-center" ? style="padding:12px;font-size:13px;">Kembali</a>
<br>
<h2><?php echo $berita['judul']; ?></h2>
<small class="post-date">Posted on: <?php echo $berita['tgl_buat']; ?></small><br>
<img src="<?php echo base_url();?>asset/images/berita/<?= $berita['image']; ?>" width="256">
<div class="post-body">
	<p>
    <?php echo $berita['isi']; ?>
    </p>
</div>

</div>