
<?php

/**
 * @var array $komik
 */

?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid komik-container">

    <h1 class="judul-halaman">Daftar Komik Lofman</h1>

    <div class="table-responsive">
        <table class="table table-hover align-middle tabel-komik">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sampul</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($komik as $k) : ?>
                    <tr>
                        <td><?= esc($k['id']); ?></td>

                        <td>
                            <img
                                src="<?= base_url('img/' . $k['sampul']); ?>"
                                alt="<?= esc($k['judul']); ?>"
                                class="sampul-komik"
                            >
                        </td>

                        <td><?= esc($k['judul']); ?></td>

                        <td><?= esc($k['penulis']); ?></td>

                        <td><?= esc($k['penerbit']); ?></td>

                        <td>
                            <button
                                type="button"
                                class="btn-detail"
                                data-komik="<?= esc(json_encode($k), 'attr'); ?>"
                                onclick="tampilkanDetail(this)"
                            >
                                Detail
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<!-- Overlay dan kartu detail -->
<div id="overlay-detail" class="overlay-detail" onclick="tutupDetail(event)">

    <div class="kartu-detail" role="dialog" aria-modal="true"
         aria-labelledby="detail-judul" onclick="event.stopPropagation()">

        <button type="button" class="tombol-x" onclick="tutupDetail()">
            &times;
        </button>

        <div class="detail-header">
            <img id="detail-sampul" src="" alt="Sampul komik">
            <div>
                <h2 id="detail-judul">Detail Komik</h2>
                <p id="detail-slug"></p>
            </div>
        </div>

        <div class="detail-body">

            <div class="detail-item">
                <span>ID</span>
                <strong id="detail-id"></strong>
            </div>

            <div class="detail-item">
                <span>Judul</span>
                <strong id="detail-judul-data"></strong>
            </div>

            <div class="detail-item">
                <span>Slug</span>
                <strong id="detail-slug-data"></strong>
            </div>

            <div class="detail-item">
                <span>Penulis</span>
                <strong id="detail-penulis"></strong>
            </div>

            <div class="detail-item">
                <span>Penerbit</span>
                <strong id="detail-penerbit"></strong>
            </div>

            <div class="detail-item">
                <span>Nama File Sampul</span>
                <strong id="detail-nama-sampul"></strong>
            </div>

            <div class="detail-item">
                <span>Tanggal Dibuat</span>
                <strong id="detail-create-at"></strong>
            </div>

            <div class="detail-item">
                <span>Terakhir Diperbarui</span>
                <strong id="detail-updated-at"></strong>
            </div>

        </div>

        <button type="button" class="btn-tutup" onclick="tutupDetail()">
            Tutup
        </button>

    </div>
</div>


   


<?= $this->endSection(); ?>
