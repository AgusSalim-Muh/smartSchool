/* LOG OUT */
// 1. Tangkap (Pilih) elemen-elemen yang kita butuhkan
const logoutButton = document.getElementById('logout-button');
const logoutModal = document.getElementById('logout-modal');
const cancelButton = document.getElementById('cancel-button');
const confirmButton = document.getElementById('confirm-button');
const modalOverlay = document.getElementById('modal-overlay');


// 2. Tambahkan "pendengar acara" ke tombol "Keluar"
logoutButton.addEventListener('click', function(event) {
  event.preventDefault(); // Mencegah link berpindah halaman
  logoutModal.classList.add('show'); // 3. Menambahkan class 'show' untuk menampilkan modal
   modalOverlay.classList.add('show');
});

// Tambahkan pendengar untuk tombol "Tidak" (menyembunyikan modal)
cancelButton.addEventListener('click', function() {
  logoutModal.classList.remove('show'); // Menghapus class 'show' untuk menyembunyikan modal
    modalOverlay.classList.remove('show');

});

// Tambahkan pendengar untuk tombol "Yakin"
confirmButton.addEventListener('click', function() {
  // Di sini nanti kita tambahkan kode untuk logout (misalnya, mengalihkan ke halaman login)
  window.location.href = 'login.html'; // Contoh mengalihkan ke halaman login
});
// Klik area overlay = tutup modal
modalOverlay.addEventListener('click', function() {
  logoutModal.classList.remove('show');
  modalOverlay.classList.remove('show');
});