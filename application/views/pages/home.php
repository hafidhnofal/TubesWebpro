<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.minc.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style2.css">

<?php foreach($berita as $brt) : ?>
<br>
<div class="row-mt-2">

<h3><?php echo $brt['judul']; ?></h3>
<div class="row">
    <div class="col-md-3">
        <img class="post-thumb" src="<?php echo base_url(); ?>asset/images/berita/<?php echo $brt['image']; ?>">
    </div>
    <div class="col-md-9">
        <small class="post-date">Posted on: <?php echo $brt['tgl_buat']; ?> in <strong><?php echo $brt['nama']; ?></strong></small><br>
    <?php echo $brt['ringkasan']; ?>
    <br><br>
    <p><a class="btn btn-primary" href="<?php echo base_url(); ?>pages/readmore/<?= $brt['id_berita'] ?>">Read More</a></p>
    </div>
</div>
</div>
<br>

<?php endforeach; ?>
