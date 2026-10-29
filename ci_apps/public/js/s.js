
function tampilkanDetail(button) {
    const komik = JSON.parse(button.dataset.komik);

    const gambarDetail = document.getElementById('detail-sampul');

    gambarDetail.src = baseUrlGambar + encodeURIComponent(komik.sampul || '');
    gambarDetail.alt = komik.judul || 'Sampul komik';

    document.getElementById('detail-id').textContent =
        komik.id ?? '-';

    document.getElementById('detail-judul').textContent =
        komik.judul || 'Detail Komik';

    document.getElementById('detail-judul-data').textContent =
        komik.judul || '-';

    document.getElementById('detail-slug').textContent =
        komik.slug || '';

    document.getElementById('detail-slug-data').textContent =
        komik.slug || '-';

    document.getElementById('detail-penulis').textContent =
        komik.penulis || '-';

    document.getElementById('detail-penerbit').textContent =
        komik.penerbit || '-';

    document.getElementById('detail-nama-sampul').textContent =
        komik.sampul || '-';

    document.getElementById('detail-create-at').textContent =
        komik.create_at || '-';

    document.getElementById('detail-updated-at').textContent =
        komik.updated_at || '-';

    document.getElementById('overlay-detail').classList.add('aktif');

    document.body.classList.add('modal-terbuka');
}

function tutupDetail(event) {
    if (event && event.target !== event.currentTarget) {
        return;
    }

    document.getElementById('overlay-detail').classList.remove('aktif');

    document.body.classList.remove('modal-terbuka');
}

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        tutupDetail();
    }
});
