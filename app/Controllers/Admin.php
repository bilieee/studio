<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;
use App\Models\LoginModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    protected $loginModel;
    protected $session;
    protected $bookingModel;

    public function __construct()
    {
        // Load model dan session
        $this->loginModel = new LoginModel();
        $this->bookingModel = new BookingModel();
        $this->session = session();
    }

    public function index()
    {
        $akun = $this->loginModel->findAll();
        $data = [
            'title' => 'Data Akun | Overtones',
            'akun' => $akun
        ];
        return view('admin/data_akun', $data);
    }

    public function informasi_booking()
    {
        $riwayat = $this->bookingModel->findAll();
        $data = [
            'title' => 'Informasi Booking | Overtones',
            'riwayat' => $riwayat
        ];

        return view('admin/informasi_booking', $data);
    }

    public function delete($id)
    {
        $booking = $this->bookingModel->find($id);
        $fileName = $booking['bukti_pembayaran'];
        $filePath = 'uploads/' . $fileName;
        unlink($filePath);
        $this->bookingModel->delete($id);
        return redirect()->to('/admin/informasi_booking')->with('pesan', 'Data booking berhasil dihapus!');;
    }

    public function delete_akun($id)
    {
        $this->loginModel->delete($id);
        return redirect()->to('/admin/data_akun')->with('pesan', 'Akun berhasil dihapus!');;
    }

    public function konfirmasi($id)
    {
        $this->bookingModel->update($id, ['proses' => 'Dikonfirmasi']);
        return redirect()->to('/admin/informasi_booking')->with('pesan', 'Data booking berhasil dikonfirmasi!');
    }
}
