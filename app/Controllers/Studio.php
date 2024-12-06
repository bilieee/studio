<?php

namespace App\Controllers;

use App\Models\BookingModel;
use CodeIgniter\Controller;

class Studio extends Controller
{
    protected $bookingModel;
    protected $session;

    public function __construct()
    {
        // Load model dan session
        $this->bookingModel = new BookingModel();
        $this->session = session();
    }

    public function save_booking()
    {
        $file = $this->request->getFile('bukti_pembayaran');
        if ($file->isValid() && !$file->hasMoved()) {
            // Beri nama unik pada file
            $fileName = $file->getRandomName();

            $file->move('uploads', $fileName);
        }
        $data = [
            'id_user' => $this->session->get('id'), // Ambil id user dari session
            'nama' => $this->request->getVar('nama'),
            'telepon' => $this->request->getVar('telepon'),
            'tanggal_booking' => $this->request->getVar('tanggal_booking'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'lama_main' => $this->request->getVar('lama_main'),
            'metode_pembayaran' => $this->request->getVar('metode_pembayaran'),
            'bukti_pembayaran' => $fileName,
            'proses' => 'Menunggu'
        ];

        $this->bookingModel->save($data);

        return redirect()->to('/studio/booking')->with('pesan', 'Booking berhasil disimpan!');
    }

    public function riwayat_client()
    {
        $id_user = $this->session->get('id');
        $riwayat = $this->bookingModel->where('id_user', $id_user)->findAll();
        $data = [
            'title' => 'Riwayat | Overtones',
            'riwayat' => $riwayat
        ];
        return view('studio/riwayat', $data);
    }
}
