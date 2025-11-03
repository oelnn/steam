<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SteamChartController;

Route::get('/', [SteamChartController::class, 'index']);
