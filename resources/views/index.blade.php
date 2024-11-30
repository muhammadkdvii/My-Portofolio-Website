@extends('layout.template')

@section('title', 'My Portofolio')

@section('content')
    <section id="home" class="flex items-center justify-center min-h-screen pt-16 mt-0">

 <!-- Global Backdrop Blur Circles -->
 <div class="absolute w-[400px] h-[400px] bg-custom-teal/15 rounded-full blur-[200px] top-0 left-10 z-[-1]"></div>
 <div class="absolute w-[500px] h-[500px] bg-custom-teal/10 rounded-full blur-[250px] top-1/2 right-10 z-[-1]"></div>
 <div class="absolute w-[300px] h-[300px] bg-custom-teal/20 rounded-full blur-[150px] bottom-0 left-40 z-[-1]"></div>
 <div class="absolute w-[500px] h-[500px] bg-custom-teal/10 rounded-full blur-[250px] bottom-20 right-10"></div>
 <div class="absolute w-[300px] h-[300px] bg-custom-teal/20 rounded-full blur-[150px] top-40 right-40"></div>

  <!-- Global Backdrop Blur Circles -->
  <div class="absolute w-[400px] h-[400px] bg-custom-teal/15 rounded-full blur-[200px] top-0 left-10 z-[-1]"></div>
  <div class="absolute w-[500px] h-[500px] bg-custom-teal/10 rounded-full blur-[250px] top-1/2 right-10 z-[-1]"></div>
  <div class="absolute w-[300px] h-[300px] bg-custom-teal/20 rounded-full blur-[150px] bottom-0 left-40 z-[-1]"></div>
  <div class="absolute w-[500px] h-[500px] bg-custom-teal/10 rounded-full blur-[250px] bottom-20 right-10"></div>
  <div class="absolute w-[300px] h-[300px] bg-custom-teal/20 rounded-full blur-[150px] top-40 right-40"></div>
 
  @if (session('success'))
        <div id="successModalHire" class="fixed inset-0 flex justify-center items-center bg-gray-500 bg-opacity-50 hidden z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full text-center">
                <div class="text-green-500 text-7xl mb-4">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 class="text-lg font-semibold">{{ session('success') }}</h3>
                <div class="mt-4">
                    <button onclick="closeModalSuccess()" class="bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition">Close</button>

                </div>
            </div>
        </div>
    @endif


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-12">
        
        <!-- Text Content -->
        <div class="md:w-1/2 space-y-4 mt-10">
            <p class="text-lg text-gray-400">HELLO, <span class="text-green-400">MY NAME IS</span></p>
            <h1 class="text-5xl font-bold text-white">Muhammad <span class="text-green-400">Kadavi</span></h1>
            <p class="text-xl italic text-gray-400">I am <span class="font-semibold text-white">Web Developer</span></p>
            <p class="text-gray-400">
            Seseorang yang mau terus belajar dan terus berkembang, karena setiap langkah kecil adalah bagian dari
            proses menuju kesuksesan yang lebih besar
            </p>
            
            <!-- Buttons -->
            <div class="flex space-x-4">
                <a class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition" onclick="openModalHire()">Hire Me</a>

                <a href="{{ route('download.cv') }}" class="border border-green-500 text-green-500 px-6 py-2 rounded-full hover:bg-gradient-custom hover:text-white transition">Download CV</a>

            </div>
        </div>

        <!-- Image -->
        <div class="md:w-1/2 relative mt-10 z-0">
            <img src="{{ asset('assets1/img/saya.png')}}" alt="Muhammad Kadavi">
        </div>
    

   

    </section>    

     <!-- Modal -->
<div id="hireModal" class="fixed inset-0 flex justify-center items-center bg-gray-500 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Hire Me</h3>
            <button onclick="closeModalHire()" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>

        <form action="{{ route('hire.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <!-- Nama Perusahaan -->
            <div class="mb-4">
                <label for="nama_perusahaan" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                @error('nama_perusahaan')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Email Perusahaan -->
            <div class="mb-4">
                <label for="email_perusahaan" class="block text-sm font-medium text-gray-700">Email Perusahaan</label>
                <input type="email" id="email_perusahaan" name="email_perusahaan" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                @error('email_perusahaan')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Formulir -->
            <div class="mb-4">
                <label for="formulir" class="block text-sm font-medium text-gray-700">Formulir</label>
                <input type="file" id="formulir" name="formulir" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                @error('formulir')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition">Kirim</button>
            </div>
        </form>
        
    </div>
</div>

    
  <!-- My Services Section -->
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

    <div class="text-center mt-12">
        <a href="{{ route('moreServices') }}" class="border border-green-500 text-green-500 px-6 py-2 rounded-full hover:bg-green-500 hover:text-white transition">Lihat Semua</a>
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


    

   <!-- About Me Section -->
    <section id="about" class="py-16">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-12">
        
        <!-- Image Section -->
        <div class="md:w-1/3">
            <img src="{{ asset('assets1/img/saya2.jpg')}}" alt="Profile Image" class="rounded-lg shadow-lg w-full">
        </div>

        <!-- Text Section -->
        <div class="md:w-2/3 space-y-6">
            <h3 class="text-green-400 uppercase">About Me</h3>
            <h2 class="text-4xl font-bold text-white">Discover <span class="text-green-400">My Creative</span> Journey</h2>
            <p class="text-gray-400">
            saya adalah seorang mahasiswa semester 3 jurusan Teknologi Informasi Fakultas Vokasi Universitas Brawijaya yang memiliki ketertarikan dalam penceritaan visual.
            </p>
            
            <!-- Sub-section 1 -->
            <div>
            <h4 class="text-xl font-semibold text-white">Crafting Meaningful and Impactful Visuals</h4>
            <p class="text-gray-400 mt-2">
                Filosofi desain saya berfokus pada penciptaan visual yang bermakna dan berdampak, yang dapat beresonansi dengan audiens. Saya percaya bahwa desain yang baik memiliki kekuatan untuk menyampaikan pesan yang kuat.
            </p>
            </div>

            <!-- Sub-section 2 -->
            <div>
            <h4 class="text-xl font-semibold text-white">A Journey of Continuous Learning and Growth</h4>
            <p class="text-gray-400 mt-2">
                Dengan pengalaman dalam video editing, pengembangan web, dan fotografi, saya terus mengembangkan keterampilan dan meningkatkan ketajaman saya dalam melihat detail.
            </p>
            </div>

        </div>

        </div>
    </section>

 <!-- Professional Skills Section -->
<section id="skill" class="py-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-white">Professional Skills</h2>
        <p class="text-green-400 italic">My Talent</p>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-0">
        @foreach ($skills as $skill)
            <div class="bg-custom-dark-2 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-white">{{ $skill->nama_skill }}</h3>
                    <span class="text-green-400 text-lg">{{ $skill->presentase }}%</span>
                </div>
                <p class="text-gray-400 mt-2">
                    {{ $skill->deskripsi }}
                </p>
                <div class="mt-4 w-full bg-gray-700 h-2 rounded-full">
                    <div class="bg-green-400 h-2 rounded-full" style="width: {{ $skill->presentase }}%;"></div>
                </div>
            </div>
        @endforeach
    </div>
</section>



  
 <!-- Portfolio Section -->
<section id="porto" class="py-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-white">PORTOFOLIO</h2>
        <p class="text-green-400 italic">Proyek Saya</p>
    </div>

    <!-- Filter Navigation (Tabs) -->
    <div class="flex justify-center space-x-6 mb-8">
        <button onclick="filterCategory('semua')" id="semua-tab" class="hover:text-teal-700 tab-button px-4 py-2 font-semibold rounded-t-lg focus:outline-none text-teal-700 border-teal-700">SEMUA</button>
        <button onclick="filterCategory('ui-ux')" id="ui-ux-tab" class="tab-button px-4 py-2 font-semibold rounded-t-lg focus:outline-none text-gray-600 hover:text-teal-700 hover:border-teal-700">DESAIN UI/UX</button>
        <button onclick="filterCategory('fotografi')" id="fotografi-tab" class="hover:text-teal-700 tab-button px-4 py-2 font-semibold rounded-t-lg focus:outline-none text-gray-600">FOTOGRAFI</button>
        <button onclick="filterCategory('website')" id="website-tab" class="hover:text-teal-700 tab-button px-4 py-2 font-semibold rounded-t-lg focus:outline-none text-gray-600">WEBSITE</button>
        <button onclick="filterCategory('videografi')" id="videografi-tab" class="hover:text-teal-700 tab-button px-4 py-2 font-semibold rounded-t-lg focus:outline-none text-gray-600">VIDEOGRAFI</button>
        <button onclick="filterCategory('lainnya')" id="lainnya-tab" class="hover:text-teal-700 tab-button px-4 py-2 font-semibold rounded-t-lg focus:outline-none text-gray-600">LAINNYA</button>
    </div>

    <!-- Portfolio Items -->
    <div id="portfolio-container" class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-0">
        @foreach ($portofolios as $item)
        <div class="portofolio-item" data-kategori="{{ $item->kategori }}" style="display: block;">
            <div class="bg-custom-dark-2 rounded-lg overflow-hidden shadow-lg">
                <img src="{{ Storage::url($item->foto) }}" alt="{{ $item->nama_portofolio }}" class="bg-gray-700 h-48">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white">{{ $item->nama_portofolio }}</h3>
                    <p class="text-gray-400 mt-2">{{ $item->deskripsi }}</p>
                    <a href="{{ $item->link_portofolio }}" class="text-green-400 mt-4 inline-block hover:underline">Lihat Selengkapnya →</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


<!-- Success Modal and Animation -->
<script>
    window.onload = function() {
        // Check if the success session exists
        if ('{{ session('success') }}') {
            // Show the success modal
            document.getElementById('successModalHire').classList.remove('hidden');
            // Add animation for the checkmark icon
            let checkIcon = document.getElementById('checkIcon');
            checkIcon.classList.add('animate__animated', 'animate__pulse');
        }
    };

    function closeModalSuccess() {
        document.getElementById('successModalHire').classList.add('hidden');
    }

    function openModalHire() {
        document.getElementById('hireModal').classList.remove('hidden');
    }

    function closeModalHire() {
        document.getElementById('hireModal').classList.add('hidden');
    }
</script>

    
    
@endsection
