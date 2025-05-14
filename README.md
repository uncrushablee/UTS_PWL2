# EduShare

**EduShare** adalah aplikasi web berbasis Laravel yang dibuat untuk mendukung Tujuan Pembangunan Berkelanjutan (SDGs) nomor 4: *Pendidikan Berkualitas*. Aplikasi ini berfungsi sebagai platform terbuka untuk berbagi informasi dan materi edukatif, memungkinkan setiap pengguna untuk menjadi kontributor aktif.

## 🎯 Tujuan Proyek

EduShare bertujuan untuk menjembatani kesenjangan akses terhadap informasi dan konten pendidikan dengan menyediakan wadah berbagi berbasis komunitas. Semua pengguna yang terdaftar memiliki hak akses penuh untuk membuat, membaca, memperbarui, dan menghapus data, menjadikan platform ini kolaboratif dan demokratis.

## 🧩 Fitur Utama

- **Autentikasi Pengguna**
  - Registrasi dan Login
  - Middleware Laravel untuk membatasi akses bagi pengguna terverifikasi

- **Manajemen Data Edukasi**
  - CRUD untuk konten edukatif: materi belajar, informasi penting, catatan pembelajaran

- **Pencarian & Sorting**
  - Sorting berdasarkan: Nama, Kategori, Supplier, Stok, Harga, dan Catatan
  - Fitur pencarian cepat berdasarkan nama barang

- **Hak Akses Tunggal**
  - Semua pengguna bertindak sebagai admin (tanpa sistem RBAC), mendorong kolaborasi terbuka

## 🛠️ Teknologi yang Digunakan

- **Laravel 10** – Framework utama
- **Blade Template Engine** – Untuk antarmuka pengguna
- **Bootstrap 5 & AdminLTE** – Untuk tampilan modern dan responsif
- **MySQL** – Database utama
- **PHP 8.x** – Bahasa pemrograman backend
- **Composer & Artisan** – Untuk manajemen dependensi dan command-line Laravel

## ⚙️ Instalasi

1. Clone repositori:
   ```bash
   git clone https://github.com/username/edushare.git
   cd edushare
   ```

2. Instal dependensi:
   ```bash
   composer install
   ```

3. Salin file `.env` dan konfigurasi database:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Migrasi database:
   ```bash
   php artisan migrate
   ```

5. Jalankan server:
   ```bash
   php artisan serve
   ```

## 🧠 Tantangan dan Solusi

- **Manajemen Role Sederhana**  
  Tidak menggunakan RBAC kompleks; solusi: pembatasan akses hanya untuk user yang terverifikasi.

- **Keselarasan UI & Fungsi CRUD**  
  Menggunakan AdminLTE & Blade untuk menjaga UI tetap sederhana namun informatif.

- **Keterkaitan dengan SDG 4**  
  Setiap konten dimaknai sebagai bentuk kontribusi pendidikan berkualitas secara terbuka.

## 🤝 Kontribusi

Proyek ini terbuka untuk kontribusi. Jika Anda ingin menambahkan fitur atau memperbaiki bug, silakan fork repositori ini dan ajukan *pull request*.

## 📄 Lisensi

EduShare dibuat untuk tujuan edukasi dan non-komersial. Silakan sesuaikan lisensi jika proyek ini akan digunakan secara publik.
