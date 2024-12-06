<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h5>Isi Form Berikut</h5>
                    </div>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('save'); ?>" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telepon" class="col-sm-4 col-form-label">No Hp</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="telepon" name="telepon" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_booking" class="col-sm-4 col-form-label">Tanggal Booking</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tanggal_booking" name="tanggal_booking" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jam_mulai" class="col-sm-4 col-form-label">Booking di Jam</label>
                            <div class="col-sm-8">
                                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lama_main" class="col-sm-4 col-form-label">Lama Main</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="lama_main" name="lama_main" min="1" max="5" required>
                                <small class="text-muted">Maksimal 5 jam</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="metode_pembayaran" class="col-sm-4 col-form-label">Metode Pembayaran</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control mt-2" id="metode_pembayaran" name="metode_pembayaran" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="bukti_pembayaran" class="col-sm-4 col-form-label">Bukti Pembayaran</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/png, image/jpeg, image/jpg" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-2">Pesan</button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <h5>INFORMASI TENTANG PEMBAYARAN</h5>
                        <h5>NOTED: HARGA PERJAM 30K</h5>
                        <p>Bank Rakyat Indonesia (BRI) : 923131230423 A.N. Regar</p>
                        <p>Dana : 08312123293 A.N. Regar</p>
                        <p>OVO : 923131230423 A.N. Regar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>