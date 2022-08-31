# program-crud-yr
## Tutorial pemasangan
1. Silahkan clone repo ini
2. Setelah di clone, silahkan masuk ke dala foldernya. Llau buka terminal dan jalankan perintah: composer install
4. Setelah menginstal dependencies, jalankan perintah: cp .env.example .env atau copy .env.example .env
5. Llau jalankan perintah php artisan key:generate
6. Silahkan buka file .env, lalu ubah konfigurasi databasenya
6. Llau jalankan migrasi database dengan perintah: php artisan migrate
7. Jalankan perintah: php artisan serve, lalu kunjungi http://localhost:8000

## Fitur
1. CRUD data produk
2. Validasi pada proses tambah dan ubah data
