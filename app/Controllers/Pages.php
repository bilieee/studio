<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Overtones'
        ];
        return view('studio/home', $data);
    }

    public function booking()
    {
        $data = [
            'title' => 'Booking | Overtones'
        ];
        return view('studio/booking', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Overtones'
        ];
        return view('studio/contact', $data);
    }
}
