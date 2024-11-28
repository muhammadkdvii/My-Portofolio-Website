@extends('dashboard.layout.template')

@section('title', 'Edit')

@section('content')

<!-- Page Title Start -->
<div class="flex items-center justify-between flex-wrap gap-2 mb-3 mt-10 ml-10">
    <div>
        <h2 class="text-gray-300 text-4xl font-medium">Edit - Portofolio</h2>
    </div>
</div>
<!-- Page Title End -->

<div class="p-5">
    <div class="card">
        <div class="p-6">
            <form action="{{ route('dashboard.portofolio.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Form Fields -->
                <div>
                    <label for="nama-portofolio">Nama Portofolio</label>
                    <input type="text" id="nama-portofolio" name="nama_portofolio" class="form-input" value="{{ old('nama_portofolio', $portofolio->nama_portofolio) }}" required>
                </div>

                <br>
            
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" class="form-input" required>{{ old('deskripsi', $portofolio->deskripsi) }}</textarea>
                </div>

                <br>     
            
                <div>
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="kategori" class="form-select" required>
                        <option value="ui/ux" {{ old('kategori', $portofolio->kategori) == 'ui/ux' ? 'selected' : '' }}>UI/UX</option>
                        <option value="fotografi" {{ old('kategori', $portofolio->kategori) == 'fotografi' ? 'selected' : '' }}>Fotografi</option>
                        <option value="website" {{ old('kategori', $portofolio->kategori) == 'website' ? 'selected' : '' }}>Website</option>
                        <option value="vidiografi" {{ old('kategori', $portofolio->kategori) == 'vidiografi' ? 'selected' : '' }}>Vidiografi</option>
                        <option value="lainnya" {{ old('kategori', $portofolio->kategori) == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="link-portofolio">Link Portofolio</label>
                    <input type="url" id="link-portofolio" name="link_portofolio" class="form-input" value="{{ old('link_portofolio', $portofolio->link_portofolio) }}" required>
                </div>
            <br>
                <div>
                    <label for="foto">Foto</label>
                    <input type="file" id="foto" name="foto" class="form-input" onchange="previewImage(event)">
                    <br>
                    @if ($portofolio->foto)
                        <div>
                            <label>Current Photo:</label>
                            <img src="{{ asset('storage/' . $portofolio->foto) }}" alt="Foto Portofolio" class="max-w-xs max-h-24 object-contain rounded-md">
                        </div>
                    @endif
<br>

                </div>
            
                <div class="mt-5">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded">
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end card -->
</div>

@endsection
