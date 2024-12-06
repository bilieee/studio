<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Hubungi Kami</h2>
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Informasi Kontak</h5>
                    <p class="card-text">
                        <strong>Alamat:</strong> Simpang IV Sipin, Kec. Telanaipura, Kota Jambi, Jambi 36361<br>
                        <strong>Telepon:</strong> +62 123 4567 890<br>
                        <strong>Email:</strong> OvertonesStudio@gmail.com<br>
                        <strong>Jam Operasional:</strong> Buka setiap hari 24 jam<br>
                    </p>
                </div>
            </div>
            <div class="alamat-studio mt-4">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2302717783195!2d103.57854667589814!3d-1.6166178360782928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588643500e331%3A0xc62326f6d7806336!2sOvertone%20Studio%20Jambi!5e0!3m2!1sid!2sid!4v1733402081741!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>