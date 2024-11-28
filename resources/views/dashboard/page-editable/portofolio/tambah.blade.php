@extends('dashboard.layout.template')

@section('title', 'Tambah')

@section('content')

<!-- Page Title Start -->
<div class="flex items-center justify-between flex-wrap gap-2 mb-3 mt-10 ml-10">
    <div>
        <h2 class="text-gray-300 text-4xl font-medium">Tambah - Portofolio</h2>
    </div>
</div>
<!-- Page Title End -->
<div class="p-5">
    <div class="card">
        <div class="p-6">
            <form action="{{ route('dashboard.portofolio.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Form Fields -->
                <div>
                    <label for="nama-portofolio">Nama Portofolio</label>
                    <input type="text" id="nama-portofolio" name="nama_portofolio" class="form-input" required>
                </div>
            
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" class="form-input" required></textarea>
                </div>
            
                <div>
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="kategori" class="form-select" required>
                        <option value="ui/ux">UI/UX</option>
                        <option value="fotografi">Fotografi</option>
                        <option value="website">Website</option>
                        <option value="vidiografi">Vidiografi</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            
                <div>
                    <label for="link-portofolio">Link Portofolio</label>
                    <input type="url" id="link-portofolio" name="link_portofolio" class="form-input" required>
                </div>
            
                <div>
                    <label for="foto">Foto</label>
                    <input type="file" id="foto" name="foto" class="form-input">
                </div>
            
                <div class="mt-5">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end card -->
</div>

@endsection
