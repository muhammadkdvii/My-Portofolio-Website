// Fungsi untuk membuka modal dan mengisi informasi harga
function openModal(serviceName, servicePrice) {
    document.getElementById('modal-price').innerText = `Harga untuk ${serviceName}: ${servicePrice}`;
    document.getElementById('serviceModal').classList.remove('hidden');
}

// Fungsi untuk menutup modal
function closeModal() {
    document.getElementById('serviceModal').classList.add('hidden');
}