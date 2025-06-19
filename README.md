Akun User:
-Email: unggulwidyasaputra@gmail.com
-Password: 12345678

Akun Admin:
-Email: admin@gmail.com
-Password: 12345678

Langkah-langkah memasang project ArtVenture:
1. Membuat database baru di localhost/phpmyadmin dengan nama "artventure" (sesuai di .env)...
2. Impor database yang sudah ada di project ArtVenture ke database baru
3. Buka project ArtVenture di VS Code lalu buka terminal (ctrl + j)
4. Jalankan perintah "composer install" untuk menginstal semua dependensi
5. Jalankan perintah "php artisan key:generate" untuk mengenerate key aplikasi
6. Jalankan perintah "php artisan serve" untuk menjalankan project ArtVenture

Tutorial menggunakan ArtVenture dengan akun user:
1. Buka browser dan akses ke "(http://127.0.0.1:8000/)"
2. Masuk ke akun user dengan email "unggulwidyasaputra@gmail"
3. Pilih menu "Artworks" untuk melihat artikel-artikel yang sudah ada
4. Tekan Card Artworks untuk melihat detail dari karya seninya
5. Jika ingin memasukkan ke keranjang, tekan tombol "Add to Cart"
6. Tekan menu Cart di navbar untuk mengecek menu keranjang
7. Isi form terlebih dahulu untuk memasukkan alamat pengiriman
8. Tekan tombol "Checkout" untuk melanjutkan proses checkout
9. Scan QR Code untuk melanjutkan proses pembayaran
10. Setelah itu tekan done untuk melanjutkan menu history untuk mengecek riwayat transaksi

Tutorial menggunakan ArtVenture dengan akun admin:
1. Buka browser dan akses ke "(http://127.0.0.1:8000/)"
2. Masuk ke akun admin dengan email "admin@gmail"
3. Pilih menu "Artworks" untuk melihat artikel-artikel yang sudah ada
4. Tekan tombol "Add Artwork" untuk menambahkan artikel-artikel baru
5. Isi form terlebih dahulu untuk memasukkan detail artikel karya seni
6. Tekan tombol "Save" untuk menyimpan artikel karya seni baru
7. Pilih menu "Users" untuk melihat daftar pengguna yang sudah ada
8. Pilih menu "Data Order" untuk melihat riwayat transaksi yang sudah ada
9. Di menu "Data Order" bisa memilih status order antara "On The Way" dan "Delivered"
10. Di menu "Category" berisi kategori-kategori yang sudah ada
11. Di menu "Category" bisa menambahkan kategori baru dengan mengisi field "Enter Category Name" dan tekan "Add Category"
12. Di menu "Category" juga bisa menghapus data kategori dengan mengklik tombol "Delete Category"
13. DI menu "Dashboard" berisi data-data yang sudah ada seperti total order, total pelanggan, total pesanan terkirim, dan total kategori
