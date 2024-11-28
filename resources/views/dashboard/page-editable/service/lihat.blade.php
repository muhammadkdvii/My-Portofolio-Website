@extends('dashboard.layout.template')

@section('title', 'Lihat Service')

@section('content')

<div class="flex items-center justify-between flex-wrap gap-2 mb-6 mt-10 ml-10">
    <div>
        <h2 class="text-gray-300 text-4xl font-medium">Lihat Service</h2>
    </div>
</div>

<div class="p-5">
    <div class="card">
        <div class="p-6">
            <div class="mb-4">
                <h4 class="text-gray-800 font-semibold text-lg">Nama Service</h4>
                <p class="text-gray-600">{{ $service->nama_service }}</p>
            </div>
            <div class="mb-4">
                <h4 class="text-gray-800 font-semibold text-lg">Sub Nama Service</h4>
                <p class="text-gray-600">{{ $service->sub_nama_service }}</p>
            </div>
            <div class="mb-4">
                <h4 class="text-gray-800 font-semibold text-lg">Deskripsi</h4>
                <p class="text-gray-600">{{ $service->deskripsi }}</p>
            </div>
            <div class="mb-4">
                <h4 class="text-gray-800 font-semibold text-lg">Harga</h4>
                <p class="text-gray-600">Rp {{ number_format($service->harga, 2, ',', '.') }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
