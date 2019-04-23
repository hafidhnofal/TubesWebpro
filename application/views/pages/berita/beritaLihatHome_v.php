<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.minc.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style2.css">
<div class="container">
<br>
<a href="<?php echo base_url();?>berita/beritahome	" class="badge badge-danger float-center" ? style="padding:12px;font-size:13px;">Kembali</a>
<br>
<h2><?php echo $berita['judul']; ?></h2>
<small class="post-date">Posted on: <?php echo $berita['tgl_buat']; ?></small><br>
<img src="<?php echo base_url();?>asset/images/berita/<?= $berita['image']; ?>" width="256">
<div class="post-body" style="font-size:15px;">
	<p>
    <?php echo $berita['isi']; ?>
    </p>
</div>
<hr>
<h3>Comments</h3>
<?php if($komen) : ?>
	<?php foreach($komen as $komen) : ?>
	<div class="container">
		<div>
		<div class="table table-bordered">
					<h5><?php echo $komen['isi']; ?> [by <strong><?php echo $komen['nama']; ?></strong>]</h5>
					<p style=font-size:12px"">Create At :<?php echo $komen['tgl_buat']; ?> </p>
					<?php if($this->session->userdata('nama')):?>
                <a href="<?php echo base_url(); ?>komen/hapus/<?= $komen['id_comment'] ?>/<?= $berita['id_berita'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ? style="padding:6px;font-size:12px;">Hapus Komen</a>
                <?php endif; ?>
				</div>
		</div>
			
	</div>
		
	<?php endforeach; ?>
<?php else : ?>
	<p>No Comments To Display</p>
<?php endif; ?>
</div>