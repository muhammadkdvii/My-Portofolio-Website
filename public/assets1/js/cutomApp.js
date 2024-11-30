// Fungsi untuk membuka modal dan mengisi informasi harga
function openModal(serviceName, servicePrice) {
    document.getElementById('modal-price').innerText = `Harga untuk ${serviceName}: ${servicePrice}`;
    document.getElementById('serviceModal').classList.remove('hidden');
}

// Fungsi untuk menutup modal
function closeModal() {
    document.getElementById('serviceModal').classList.add('hidden');
}

// Fungsi untuk memfilter kategori dan memperbarui tampilan tombol
function filterCategory(kategori) {
    // Update warna tombol yang aktif
    document.querySelectorAll('.tab-button').forEach(button => {
        button.classList.remove('text-teal-700', 'border-teal-700');
        button.classList.add('text-gray-600');
    });

    // Ambil tombol aktif berdasarkan kategori yang dipilih
    let activeTab = document.getElementById(kategori + '-tab');
    
    if (activeTab) {
        activeTab.classList.add('text-teal-700', 'border-teal-700');
        activeTab.classList.remove('text-gray-600');
    }

    // Ambil portofolio yang sesuai dengan kategori
    let portofolios = document.querySelectorAll('.portofolio-item');
    portofolios.forEach(item => {
        if (kategori === 'semua' || item.dataset.kategori === kategori) {
            item.style.display = 'block'; // Tampilkan item yang sesuai
        } else {
            item.style.display = 'none'; // Sembunyikan item yang tidak sesuai
        }
    });
}


// Pastikan JavaScript hanya dijalankan setelah DOM sepenuhnya dimuat
document.addEventListener("DOMContentLoaded", function() {
    // Menggunakan kategori default (semua) saat halaman pertama dimuat
    filterCategory('semua');
});


