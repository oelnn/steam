<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SteamChartController extends Controller
{
    public function index()
    {
        $gamesGratis = [
            'Dota 2',
            'Counter Strike',
            'Apex Legend',
            'Destiny 2',
            'PUBG: Battleground'
        ];

        $gamesBerbayar = [
            'Helldivers 2',
            'Path of Exile 2',
            'Rust',
            'GTA V',
            'Monster Hunter Wilds'
        ];

        return view('steamchart', compact('gamesGratis', 'gamesBerbayar'));
    }
}
