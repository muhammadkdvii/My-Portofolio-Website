@extends('dashboard.layout.template')

@section('title', 'Dashboard-portofolio')

@section('content')

<!-- Page Title Start -->
<div class="flex items-center justify-between flex-wrap gap-2 mb-6 mt-10 ml-10">
    <div>
        <h2 class="text-gray-300 text-4xl font-medium">Portofolio</h2>
    </div>
</div>
<!-- Page Title End -->

<div class="px-10">
    <a href="{{ route('dashboard.page-editable.portofolio.tambah') }}" type="button" class="btn bg-blue-500 text-white mb-5 hover:bg-blue-600">
        <i class="material-symbols-rounded text-2xl">add</i>Tambah
    </a>
    
    <div class="card overflow-hidden">
        <div>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm font-semibold">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm font-semibold">
                                        Nama Portofolio
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm font-semibold">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm font-semibold">
                                        Foto
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-end text-sm font-semibold">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($portofolios as $key => $portofolio)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $key + 1 }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ $portofolio->nama_portofolio }}
                                    </td>
                                    <td class="px-6 py-4 break-words max-w-xs overflow-hidden text-ellipsis text-sm text-gray-800">
                                        {{ $portofolio->deskripsi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        @if ($portofolio->foto)
                                           <img src="{{ asset('storage/' . $portofolio->foto) }}" alt="Foto Portofolio" class="max-w-xs max-h-24 object-contain rounded-md">

                                        @else
                                            <span class="text-gray-500">Tidak ada foto</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm items-center justify-center">
                                        <div class="flex justify-end gap-2">
                                            <!-- Edit Link -->
                                            <a href="{{ route('dashboard.page-editable.portofolio.edit', $portofolio->id) }}" type="button" class="btn bg-warning hover:bg-yellow-500 text-white px-3 py-2 rounded">
                                                Edit
                                            </a>
                                            <!-- Lihat Link -->
                                            <a href="{{ route('dashboard.portofolio.show', $portofolio->id) }}" type="button" class="btn bg-purple-500 hover:bg-purple-600 text-white px-3 py-2 rounded">
                                                Lihat
                                            </a>
                                            <!-- Delete Button (With Confirmation) -->
                                            <form action="{{ route('dashboard.portofolio.delete', $portofolio->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn bg-danger hover:bg-red-500 text-white px-3 py-2 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus portofolio ini?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->
</div>

@endsection
