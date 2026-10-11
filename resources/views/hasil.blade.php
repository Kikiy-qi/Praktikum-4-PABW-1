@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <x-alert type="success">
            <strong>Berhasil!</strong> Laporan kejadian banjir telah terkirim ke sistem BPBD.
        </x-alert>

        <div class="card shadow-sm border-0 mt-3">
            <div class="card-header bg-white pt-4 pb-2">
                <h5 class="mb-0 fw-bold">Detail Laporan</h5>
            </div>
            <div class="card-body p-4">
                <table class="table table-borderless border">
                    <tr class="border-bottom"><th style="width: 40%;">Nama Pelapor</th><td>: {{ $data['nama'] }}</td></tr>
                    <tr class="border-bottom"><th>Lokasi</th><td>: {{ $data['lokasi'] }}</td></tr>
                    <tr><th>Tinggi Air</th><td>: {{ $data['tinggi'] }} cm</td></tr>
                </table>
                <div class="d-flex gap-2 mt-4">
                    <a href="{{ route('form') }}" class="btn btn-outline-primary w-100">Buat Baru</a>
                    <a href="{{ route('daftar') }}" class="btn btn-primary w-100">Lihat Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection