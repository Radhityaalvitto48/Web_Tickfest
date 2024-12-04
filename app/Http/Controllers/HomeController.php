<?php

namespace App\Http\Controllers;
use App\Models\Tiket;
use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data tiket beserta relasi kotanya
        $tikets = Tiket::with('kota')->limit(9)->get();
        $kotas = Kota::limit(4)->get();

        // Kirim data ke view
        return view('pages.home', compact('tikets','kotas'));
    }

    public function show($id)
    {
        // Cari event berdasarkan ID
        $tiket = Tiket::with('kota')->findOrFail($id);

        // Kirim data ke view
        return view('pages.detail', compact(var_name: 'tiket'));
    }
}
