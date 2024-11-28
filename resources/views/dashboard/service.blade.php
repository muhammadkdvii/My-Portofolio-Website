@extends('dashboard.layout.template')

@section('title', 'Dashboard-service')

@section('content')

<!-- Page Title Start -->
<div class="flex items-center justify-between flex-wrap gap-2 mb-6 mt-10 ml-10  ">
    <div>
        <h2 class=" text-gray-300 text-4xl font-medium" >Service</h2>
    </div>
</div>
<!-- Page Title End -->


<div class="px-10">
    <a href="{{ route ('dashboard.service.create')}}"  type="button" class="btn bg-blue-500 text-white mb-5 hover:bg-blue-600">
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
                                    Judul
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold">
                                    Sub Judul
                                </th>

                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold">
                                    Deskripsi
                                </th>

                                <th scope="col" class="px-6 py-3 text-start text-sm font-semibold">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3 text-end text-sm font-semibold">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($services as $key => $service)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                    {{ $key + 1 }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                   {{ $service->nama_service}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                    {{ $service->sub_nama_service}}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 break-words whitespace-normal">
                                    {{ $service->deskripsi}}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 break-words whitespace-normal">
                                    {{ $service->harga}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm items-center justify-center">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('dashboard.service.edit', $service->id) }}" 
                                           class="btn bg-warning hover:bg-yellow-500 text-white px-3 py-2 rounded">
                                            Edit
                                        </a>
                                        <a href="{{ route('dashboard.service.show', $service->id) }}" 
                                           class="btn bg-purple-500 hover:bg-purple-600 text-white px-3 py-2 rounded">
                                            Lihat
                                        </a>
                                        <form action="{{ route('dashboard.service.delete', $service->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn bg-danger hover:bg-red-500 text-white px-3 py-2 rounded">
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