@extends('dashboard.layout.template')

@section('title', 'Lihat - Skill')

@section('content')

<!-- Page Title Start -->
<div class="flex items-center justify-between flex-wrap gap-2 mb-6 mt-10 ml-10">
    <div>
        <h2 class="text-gray-300 text-4xl font-medium">Lihat - Skill</h2>
    </div>
</div>
<!-- Page Title End -->

<div class="p-5">
    <div class="card">
        <div class="p-6">
            <!-- Tabel Data Skill -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-100 text-gray-800">
                            <th class="px-6 py-3 text-left text-sm font-medium">Nama Skill</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Deskripsi</th>
                            <th class="px-6 py-3 text-left text-sm font-medium">Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $skill->nama_skill }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $skill->deskripsi }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800"><div class="bg-gray-700 h-2 rounded-full">
                                <div class="bg-green-400 h-2 rounded-full" style="width: {{ $skill->presentase }}%;"></div>
                            </div>
                            <span class="text-green-400">{{ $skill->presentase }}%</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
