<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Halaman utama (home) menampilkan data destinasi wisata
     */
    public function index()
    {
        $destinasi = [
            ['nama' => 'Acropolis, Yunani', 'gambar' => 'acropolis.jpg'],
            ['nama' => 'Shibuya, Jepang', 'gambar' => 'shibuya.jpg'],
            ['nama' => 'Cappadocia, Turki', 'gambar' => 'cappadocia.jpg'],
            ['nama' => 'Giza, Mesir', 'gambar' => 'giza.jpg'],
            ['nama' => 'Garuda Wisnu Kencana, Bali', 'gambar' => 'garuda.jpg'],
            ['nama' => 'Huayana, Peru', 'gambar' => 'huayana.jpg'],
            ['nama' => 'Jumeirah, Abu Dhabi', 'gambar' => 'jumeirah.jpg'],
            ['nama' => 'New York, AS', 'gambar' => 'newyork.jpg'],
            ['nama' => 'Niagara, Kanada', 'gambar' => 'niagara.jpg'],
        ];

        // arahkan ke view home.blade.php
        return view('home', compact('destinasi'));
    }

    /**
     * Halaman profil menampilkan data mahasiswa
     */
    public function profile()
    {
        $profiles = [
            [
                'name' => 'L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI',
                'nim' => '2301010138',
                'image' => 'acropolis.jpg',
                'bio' => 'Professional back end developer and occasionally AK47 bringer',
                'semester' => 'GENAP'
            ],
            [
                'name' => 'ARTHUR EMANUEL DEKKO',
                'nim' => '2301010097',
                'image' => 'bckground.webp',
                'bio' => 'Designing front-end is my passion sir 💖',
                'semester' => 'GANJIL'
            ]
        ];

        // arahkan ke view profile.blade.php
        return view('home', compact('home'));
    }

    /**
     * Halaman About
     */
    public function about()
    {
        return view('aboutpage');
    }
}

