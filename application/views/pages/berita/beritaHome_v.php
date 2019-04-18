<link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
<div class="container">

<?php if ($this->session->flashdata('flash')) : ?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berita <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>

    <div class="row mt-3">
    <div class="col md-6">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari data mahasiswa ... " name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Berita Anda</h3>
            <?php if (empty($berita)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>
            <div class="row mt-1">
                <div class="col md-1 text-right mt-1">
                    <a href="<?= base_url(); ?>berita/beritaTambah_v/" class="badge badge-primary float-center" style="padding:20px;padding-bottom:15px;font-size:15px;">Tambah Data Berita</a>
                </div>
            </div>
            <table class="table mt-1">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Judul</th>
                        <th class="text-center" scope="col">Ringkasan</th>
                        <th class="text-center" scope="col">Kategori</th>
                        <th class="text-center" scope="col">Tanggal</th>
                        <th class="text-center" scope="col">Gambar</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($berita as $brt) : ?>
                        <td class="text-center"><?= $brt['judul']; ?></td>
                        <td class="text-center"><?= $brt['ringkasan']; ?></td>
                        <td class="text-center"><?= $brt['kategori']; ?></td>
                        <td class="text-center"><?= $brt['tgl_buat']; ?></td>
                        <td class="text-center">
                            <img src=" <?php echo base_url();?>asset/images/berita/<?= $brt['image']; ?>" width="64" />
                       </td>
                        <td class="text-center">

                        <a href="<?php echo base_url(); ?>berita/beritaLihat/<?= $brt['id_berita'] ?>" class="badge badge-info float-center" style="padding:9px;">Lihat...</a>

                            <a href="<?php echo base_url(); ?>berita/beritaUbah_v/<?= $brt['id_berita'] ?>" class="badge badge-success float-center" ? style="padding:9px;">Ubah</a>
                            <a href="<?php echo base_url(); ?>berita/hapus/<?= $brt['id_berita'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ? style="padding:9px;">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            

        </div>
    </div>
</div> 