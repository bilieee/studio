<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-4">Riwayat Booking</h3>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
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
                        <th>Aksi</th>
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
                            <td>
                                <?php if ($r['proses'] == 'Menunggu') : ?>
                                    <form action="/booking/konfirmasi/<?= $r['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <button type="submit" class="btn btn-success">Konfirmasi</button>
                                    </form>
                                <?php endif; ?>
                                <form action="/booking/hapus/<?= $r['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>