<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Latihan CI',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        echo view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jalan Haha',
                    'kota' => 'bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
