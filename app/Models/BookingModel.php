<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model

{

    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama', 'id_user', 'telepon', 'tanggal_booking', 'jam_mulai', 'lama_main', 'metode_pembayaran', 'bukti_pembayaran', 'proses'];
}
