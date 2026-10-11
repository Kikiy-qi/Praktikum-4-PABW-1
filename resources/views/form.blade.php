@extends('layouts.app')

@section('title', 'Form Pelaporan Banjir')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom-0 pt-4 pb-0 text-center">
                <h4 class="text-primary fw-bold">Buat Laporan Baru</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('proses') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Pelapor</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Lokasi Kejadian (Kecamatan/Desa)</label>
                        <input type="text" class="form-control" name="lokasi" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tinggi Genangan Air (cm)</label>
                        <input type="number" class="form-control" name="tinggi" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold py-2">Kirim Laporan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection