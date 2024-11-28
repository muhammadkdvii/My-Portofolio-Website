@extends('dashboard.layout.template')

@section('title', 'Edit - Skill')

@section('content')

<!-- Page Title Start -->
<div class="flex items-center justify-between flex-wrap gap-2 mb-3 mt-10 ml-10">
    <div>
        <h2 class="text-gray-300 text-4xl font-medium">Edit - Skill</h2>
    </div>
</div>
<!-- Page Title End -->

<div class="p-5">
    <div class="card">
        <div class="p-6">
            <form action="{{ route('dashboard.skill.update', $skill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="nama_skill" class="text-gray-800 text-sm font-medium inline-block mb-2">Nama Skill</label>
                    <input type="text" name="nama_skill" value="{{ $skill->nama_skill }}" required class="form-input">
                </div>
                <div>
                    <label for="deskripsi" class="text-gray-800 text-sm font-medium inline-block mb-2">Deskripsi</label>
                    <textarea name="deskripsi" rows="4" required class="form-input">{{ $skill->deskripsi }}</textarea>
                </div>
                <div>
                    <label for="presentase" class="text-gray-800 text-sm font-medium inline-block mb-2">Presentase</label>
                    <input type="number" name="presentase" value="{{ $skill->presentase }}" min="0" max="100" required class="form-input">
                </div>

                <div class="mt-5">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end card -->
</div>

@endsection
