<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.minc.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style2.css">
<div class="container">
<br>
<a href="<?php echo base_url();?>" class="badge badge-danger float-center" ? style="padding:12px;font-size:13px;">Kembali</a>
<h2><?php echo $berita['judul']; ?></h2>
<small class="post-date">Posted on: <?php echo $berita['tgl_buat']; ?></small><br>
<img src="<?php echo base_url();?>asset/images/berita/<?= $berita['image']; ?>" width="512">
<div class="post-body" style="font-size:15px;">
	<?php echo $berita['isi']; ?>
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

            </div>
    </div>
        
</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No Comments To Display</p>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
<form action="<?php echo base_url();?>komen/create/<?= $berita['id_berita'] ?>" method="post">
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>

