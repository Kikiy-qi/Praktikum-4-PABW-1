@extends('layouts.app')

@section('title', 'Profil Petugas')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Profil Petugas</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="fw-bold text-muted">Nama Petugas</label>
                    <p class="fs-5 mb-0">{{ Auth::user()->name }}</p>
                </div>
                <div class="mb-3">
                    <label class="fw-bold text-muted">Email</label>
                    <p class="fs-5 mb-0">{{ Auth::user()->email }}</p>
                </div>
                <div class="mb-3">
                    <label class="fw-bold text-muted">Waktu Pembuatan Akun</label>
                    <p class="fs-5 mb-0">{{ Auth::user()->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('daftar') }}" class="btn btn-secondary">Kembali ke Daftar Laporan</a>
            </div>
        </div>
    </div>
</div>
@endsection
