@extends('dashboard.layout.template')

@section('title', 'Dashboard')

@section('content')

<main class="flex-grow p-5 mt-0 mb-4">

    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <div>
            <h1 class="text-gray-300 text-5xl font-medium">Selamat Datang <span class="text-gray-300">Admin</span></h1>
        </div>
    </div>
    <!-- Page Title End -->

    <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-4">
        <!-- Card 1 - Skills -->
        <div class="col-xl-3 col-md-6">
            <div class="card p-4">
                <div class="p-5">
                    <span class="material-symbols-rounded float-end text-3xl text-default-400">stacks</span>
                    <h6 class="text-muted text-sm uppercase">Skills</h6>
                    <h3 class="text-2xl mb-3" data-plugin="counterup">{{ $skillsCount }}</h3> <!-- Displaying Skills count -->
                </div>
            </div>
        </div>

        <!-- Card 2 - Service -->
        <div class="col-xl-3 col-md-6">
            <div class="card p-4">
                <div class="p-5">
                    <span class="material-symbols-rounded float-end text-3xl text-default-400">stacks</span>
                    <h6 class="text-muted text-sm uppercase">Service</h6>
                    <h3 class="text-2xl mb-3" data-plugin="counterup">{{ $serviceCount }}</h3> <!-- Displaying Service count -->
                </div>
            </div>
        </div>

        <!-- Card 3 - Portfolio -->
        <div class="col-xl-3 col-md-6">
            <div class="card p-4">
                <div class="p-5">
                    <span class="material-symbols-rounded float-end text-3xl text-default-400">stacks</span>
                    <h6 class="text-muted text-sm uppercase">Portofolio</h6>
                    <h3 class="text-2xl mb-3" data-plugin="counterup">{{ $portfolioCount }}</h3> <!-- Displaying Portfolio count -->
                </div>
            </div>
        </div>

        <!-- Card 4 - Hire -->
        <div class="col-xl-3 col-md-6">
            <div class="card p-4">
                <div class="p-5">
                    <span class="material-symbols-rounded float-end text-3xl text-default-400">stacks</span>
                    <h6 class="text-muted text-sm uppercase">Hire</h6>
                    <h3 class="text-2xl mb-3" data-plugin="counterup">{{ $hireCount }}</h3> <!-- Displaying Hire count -->
                </div>
            </div>
        </div>
    </div>

    <!-- Hires Table -->
    <div class="m-5 p-0">
        <div class="card">
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                        <thead>
                            <tr class="bg-gray-100 text-gray-800">
                                <th class="px-6 py-3 text-left text-sm font-medium">Nama Perusahaan</th>
                                <th class="px-6 py-3 text-left text-sm font-medium">Email Perusahaan</th>
                                <th class="px-6 py-3 text-left text-sm font-medium">Dokumen</th>
                                <th class="px-6 py-3 text-left text-sm font-medium">Actions</th> <!-- Added Actions Column -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hires as $hire)
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $hire->nama_perusahaan }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $hire->email_perusahaan }}</td>
                                    <td class="px-6 py-4 text-sm">
                                        @if (in_array(pathinfo($hire->formulir, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'bmp']))
                                            <img src="{{ Storage::url($hire->formulir) }}" alt="Document" class="w-16 h-16 object-cover">
                                        @elseif (in_array(pathinfo($hire->formulir, PATHINFO_EXTENSION), ['pdf', 'docx', 'doc']))
                                            <a href="{{ Storage::url($hire->formulir) }}" target="_blank" class="text-blue-600 hover:underline">View</a>
                                        @else
                                            <span class="text-gray-500">File</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('hire.destroy', $hire->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn bg-danger text-white">
                                                <i class="material-symbols-rounded text-2xl">delete_forever</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            <!-- New Hire Display -->
                            @if (session('newHire'))
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ session('newHire')['nama_perusahaan'] }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ session('newHire')['email_perusahaan'] }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ session('newHire')['no_perusahaan'] }}</td>
                                    <td class="px-6 py-4 text-sm text-blue-600">
                                        <a href="{{ Storage::url(session('newHire')['formulir']) }}" target="_blank" class="hover:underline">View</a>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
