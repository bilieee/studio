<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mt-4">
                <h3>Riwayat Booking</h3>
            </div>
            <table class="table table-bordered table-striped mt-3 text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Tanggal Booking</th>
                        <th>Jam Mulai</th>
                        <th>Lama Main (jam)</th>
                        <th>Metode Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($riwayat as $r) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $r['nama']; ?></td>
                            <td><?= $r['telepon']; ?></td>
                            <td><?= $r['tanggal_booking']; ?></td>
                            <td><?= $r['jam_mulai']; ?></td>
                            <td><?= $r['lama_main']; ?> jam</td>
                            <td><?= $r['metode_pembayaran']; ?></td>
                            <td><img src="<?= base_url('uploads/' . $r['bukti_pembayaran']); ?>" alt="Bukti Pembayaran" width="100"></td>
                            <td><?= $r['proses']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>