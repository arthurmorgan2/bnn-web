<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Artikel;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $pasien = Pasien::whereDate('created_at', Carbon::today())->count();
        $artikel = Artikel::count();
        $views = Artikel::sum('views');
        return view('admin/dashboard', compact('pasien', 'artikel', 'views'));
    }
}
