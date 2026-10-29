
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-3">

    <h1 class="mb-3">Daftar Manga</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sampul / Video</th>
                <th scope="col">Judul</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th scope="row">1</th>
                <td>
                    <!-- looop ngak bisa pas buka browser baris ke 74 -->
                     <video class="video-manga" autoplay loop playsinline controls>
                        <source src="<?= base_url('video/itaci.mp4') ?>"
                                 type="video/mp4">
                     </video>
                     
                </td>
                <td>Itachi</td>
                <td>
                    <button type="button" class="btn btn-success">
                        Detail
                    </button>
                </td>
            </tr>


            <tr>
                <th scope="row">2</th>
                <td>
                    <video class="video-manga"
                           autoplay loop playsinline controls>
                        <source src="<?= base_url('video/onepice.mp4') ?>"
                                type="video/mp4">

                    </video>
                </td>
                <td>One Piece</td>
                <td>
                    <button type="button" class="btn btn-success">
                        Detail
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!





<!--javascript untuk looop video coba coba aja -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const videos = document.querySelectorAll('.video-manga');

    videos.forEach(function (video) {
        video.muted = false;
        video.volume = 1;

        video.play().catch(function (error) {
            console.log('Video belum bisa autoplay:', error);
        });
    });
});
</script>

<?= $this->endSection(); ?>
