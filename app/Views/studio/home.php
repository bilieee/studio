<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-4">
            <div class="main">
                <div class="main-image">
                    <img src="/img/mainBand.jpg" alt="">
                </div>
                <div class="story">
                    <h2>Overtones Studio</h2>
                    <p>Ayo bermain musik bersama bandmu di Overtones Studio</p>
                    <p>Buat harimu jadi lebih berwarna</p>
                    <a href="/studio/booking" class="btn btn-primary">Booking sekarang</a>
                </div>
            </div>
            <hr class="mt-5">
            <div class="galeri-studio mt-2">
                <h3 class="text-center mb-4">Galeri Studio</h3>
                <div class="gallery-grid">
                    <img src="/img/gambar1.jpeg" alt="">
                    <img src="/img/gambar2.jpeg" alt="">
                    <img src="/img/gambar3.jpeg" alt="">
                    <img src="/img/gambar4.jpeg" alt="">
                    <img src="/img/gambar5.jpeg" alt="">
                    <img src="/img/gambar6.jpeg" alt="">
                    <img src="/img/gambar7.jpeg" alt="">
                    <img src="/img/gambar8.jpeg" alt="">
                    <img src="/img/gambar9.jpeg" alt="">
                    <img src="/img/gambar10.jpeg" alt="">
                </div>
            </div>
            <hr class="mt-5">
            <div class="alamat-studio mt-2">
                <h3 class="text-center mb-4">Alamat Studio</h3>
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2302717783195!2d103.57854667589814!3d-1.6166178360782928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588643500e331%3A0xc62326f6d7806336!2sOvertone%20Studio%20Jambi!5e0!3m2!1sid!2sid!4v1733402081741!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>