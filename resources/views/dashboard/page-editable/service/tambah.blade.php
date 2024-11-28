@extends('dashboard.layout.template')

@section('title', 'Tambah Service')

@section('content')

<div class="flex items-center justify-between flex-wrap gap-2 mb-6 mt-10 ml-10">
    <div>
        <h2 class="text-gray-300 text-4xl font-medium">Tambah Service</h2>
    </div>
</div>

<div class="p-5">
    <div class="card">
        <div class="p-6">
            <form action="{{ route('dashboard.service.store') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-6">
                    <div>
                        <label for="nama_service" class="text-gray-800 text-sm font-medium inline-block mb-2">Nama Service</label>
                        <input type="text" id="nama_service" name="nama_service" class="form-input" placeholder="Masukkan Nama Service" required>
                    </div>
                    <div>
                        <label for="sub_nama_service" class="text-gray-800 text-sm font-medium inline-block mb-2">Sub Nama Service</label>
                        <input type="text" id="sub_nama_service" name="sub_nama_service" class="form-input" placeholder="Masukkan Sub Nama Service" required>
                    </div>
                    <div>
                        <label for="deskripsi" class="text-gray-800 text-sm font-medium inline-block mb-2">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-input" rows="4" placeholder="Masukkan Deskripsi" required></textarea>
                    </div>
                    <div>
                        <label for="harga" class="text-gray-800 text-sm font-medium inline-block mb-2">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-input" placeholder="Masukkan Harga" step="0.01" required>
                    </div>
                    <div>
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded">
                            Tambah
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
