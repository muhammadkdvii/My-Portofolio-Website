@extends('layout.template')

@section('title', 'More Service')

@section('content')

<section id="service" class="py-16">

    <div class="text-center mb-12">
    <h2 class="text-3xl font-bold text-white">WHAT I DO</h2>
    <p class="text-green-400 italic">My Services</p>
    </div>
   
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 md:px-0">
        @foreach ($services as $service)
            <!-- Service Card -->
            <div class="bg-custom-dark-2 rounded-lg p-6 shadow-lg">
                <h3 class="text-sm uppercase text-gray-400">{{ $service->sub_nama_service }}</h3>
                <h4 class="text-2xl font-semibold text-white">{{ $service->nama_service }}</h4>
                <p class="text-gray-400 mt-4">{{ $service->deskripsi }}</p>
                
                <!-- Button for opening the modal -->
                <a href="javascript:void(0);" class="text-green-400 mt-4 inline-block hover:underline"
                    onclick="openModal('{{ $service->nama_service }}', '{{ $service->harga }}')">Lihat harga →</a>
            </div>
        @endforeach
    </div>
</section>

<!-- Modal -->
<div id="serviceModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg p-8 max-w-lg w-full">
        <h2 class="text-2xl font-semibold text-gray-800">Harga Service</h2>
        <p id="modal-price" class="text-lg text-gray-600 mt-4"></p>
        <div class="mt-6 flex justify-between">
            <!-- Button to close the modal -->
            <button onclick="closeModal()" class="bg-red-500 text-white px-6 py-2 rounded-lg">Tutup</button>

            <!-- Button to redirect to WhatsApp (example link) -->
            <a href="https://wa.me/088290954001" target="_blank" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition">
               DEAL
            </a>
        </div>
    </div>
</div>
    

   
</section>



@endsection