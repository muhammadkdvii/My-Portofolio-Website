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

    <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-4"> <!-- Adjusted gap from 6 to 4 -->
        <!-- Card 1 -->
        <div class="col-xl-3 col-md-6">
            <div class="card p-4"> <!-- Adjusted padding from p-5 to p-4 -->
                <div class="p-5">
                    <span class="material-symbols-rounded float-end text-3xl text-default-400">stacks</span>
                    <h6 class="text-muted text-sm uppercase">Skills</h6>
                    <h3 class="text-2xl mb-3" data-plugin="counterup">1,587</h3>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-xl-3 col-md-6">
            <div class="card p-4"> <!-- Adjusted padding from p-5 to p-4 -->
                <div class="p-5">
                    <span class="material-symbols-rounded float-end text-3xl text-default-400">stacks</span>
                    <h6 class="text-muted text-sm uppercase">Service</h6>
                    <h3 class="text-2xl mb-3"><span data-plugin="counterup">46,782</span></h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card p-4"> <!-- Adjusted padding from p-5 to p-4 -->
                <div class="p-5">
                    <span class="material-symbols-rounded float-end text-3xl text-default-400">stacks</span>
                    <h6 class="text-muted text-sm uppercase">Portofolio</h6>
                    <h3 class="text-2xl mb-3"><span data-plugin="counterup">1000</span></h3>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-xl-3 col-md-6">
            <div class="card p-4"> <!-- Adjusted padding from p-5 to p-4 -->
                <div class="p-5">
                    <span class="material-symbols-rounded float-end text-3xl text-default-400">stacks</span>
                    <h6 class="text-muted text-sm uppercase">Hire</h6>
                    <h3 class="text-2xl mb-3"><span data-plugin="counterup">5000    </span></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="m-5 p-0">
        <div class="card "> <!-- Adjusted padding from p-6 to p-4 -->
            <div class="p-6">
                <!-- Tabel Data Portofolio -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                        <thead>
                            <tr class="bg-gray-100 text-gray-800">
                                <th class="px-6 py-3 text-left text-sm font-medium">Nama Perusahaan</th>
                                <th class="px-6 py-3 text-left text-sm font-medium">Email Perusahaan</th>
                                <th class="px-6 py-3 text-left text-sm font-medium">No Perusahaan</th>
                                <th class="px-6 py-3 text-left text-sm font-medium">Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="px-6 py-4 text-sm text-gray-800"></td>
                                <td class="px-6 py-4 text-sm text-gray-800"></td>
                                <td class="px-6 py-4 text-sm text-gray-800"></td>
                                <td class="px-6 py-4 text-sm text-blue-600">
                                    <a href="" target="_blank" class="hover:underline"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>



@endsection
