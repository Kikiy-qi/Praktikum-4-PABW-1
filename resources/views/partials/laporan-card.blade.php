<div class="card shadow-sm h-100 border-0">
    <div class="card-body">
        <h5 class="card-title text-primary fw-bold">{{ $laporan['nama'] }}</h5>
        <h6 class="card-subtitle mb-3 text-muted">{{ $laporan['lokasi'] }}</h6>
        <p class="card-text mb-2">Tinggi Genangan: <strong>{{ $laporan['tinggi_air'] }} cm</strong></p>
        
        @if($laporan['tinggi_air'] < 30)
            <span class="badge bg-info text-dark px-3 py-2">Waspada</span>
        @elseif($laporan['tinggi_air'] >= 30 && $laporan['tinggi_air'] <= 70)
            <span class="badge bg-warning text-dark px-3 py-2">Siaga</span>
        @else
            <span class="badge bg-danger px-3 py-2">Awas</span>
        @endif
    </div>
</div>
