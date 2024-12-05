function openModal(serviceName, servicePrice) {
    document.getElementById('modal-price').innerText = `Harga untuk ${serviceName}: ${servicePrice}`;
    document.getElementById('serviceModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('serviceModal').classList.add('hidden');
}

function filterCategory(kategori) {
    document.querySelectorAll('.tab-button').forEach(button => {
        button.classList.remove('text-teal-700', 'border-teal-700');
        button.classList.add('text-gray-600');
    });

    let activeTab = document.getElementById(kategori + '-tab');
    
    if (activeTab) {
        activeTab.classList.add('text-teal-700', 'border-teal-700');
        activeTab.classList.remove('text-gray-600');
    }

    let portofolios = document.querySelectorAll('.portofolio-item');
    portofolios.forEach(item => {
        if (kategori === 'semua' || item.dataset.kategori === kategori) {
            item.style.display = 'block'; 
        } else {
            item.style.display = 'none'; 
        }
    });
}


document.addEventListener("DOMContentLoaded", function() {
    filterCategory('semua');
});


