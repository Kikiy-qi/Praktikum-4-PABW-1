<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class DataController extends Controller
{
    public function daftar()
    {
        $laporans = Laporan::all();

        return view('daftar', compact('laporans'));
    }

    public function form()
    {
        return view('form');
    }

    public function proses(Request $request)
    {
        $laporanBaru = Laporan::create([
            'nama_pelapor'     => $request->nama,
            'lokasi'           => $request->lokasi,
            'tinggi_genangan'  => $request->tinggi,
            'tanggal_kejadian' => now(),
        ]);
        
        $data = [
            'nama'   => $laporanBaru->nama_pelapor,
            'lokasi' => $laporanBaru->lokasi,
            'tinggi' => $laporanBaru->tinggi_genangan
        ];

        return view('hasil', compact('data'));
    }
}
