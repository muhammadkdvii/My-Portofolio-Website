@extends('dashboard.layout.template')

@section('title', 'Lihat')

@section('content')

<!-- Page Title Start -->
<div class="flex items-center justify-between flex-wrap gap-2 mb-6 mt-10 ml-10">
    <div>
        <h2 class="text-gray-300 text-4xl font-medium">Lihat - Portofolio</h2>
    </div>
</div>
<!-- Page Title End -->

<div class="p-5">
    <div class="card">
        <div class="p-6">
            <!-- Tabel Data Portofolio -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-100 text-gray-800">
                            <th class="px-6 py-3 text-left text-sm font-medium">Nama Portofolio</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Deskripsi</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Kategori</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Link Portofolio</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 text-sm text-gray-800">   {{ $portofolio->nama_portofolio }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800"> {{ $portofolio->deskripsi }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $portofolio->kategori }}</td>
                            <td class="px-6 py-4 text-sm text-blue-600">
                                <a href="{{ $portofolio->link_portofolio }}" target="_blank" class="hover:underline">{{ $portofolio->link_portofolio }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                @if ($portofolio->foto)
                                <img src="{{ asset('storage/' . $portofolio->foto) }}" alt="Foto Portofolio" class="max-w-xs max-h-24 object-contain rounded-md">

                                @else
                                    <span class="text-gray-500">Tidak ada foto</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
