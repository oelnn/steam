<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the profile page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data profil mahasiswa
        $profiles = [
            [
                'name' => 'L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI',
                'nim' => '2301010138',
                'image' => 'acropolis.jpg',
                'bio' => 'professional back end developer and ocassionally AK47 bringer',
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

        return view('profile', compact('profiles'));
    }

    /**
     * Display about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }
}