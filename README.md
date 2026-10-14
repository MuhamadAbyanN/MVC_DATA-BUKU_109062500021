# MVC PHP Native - Data Buku

Aplikasi CRUD sederhana untuk mengelola data koleksi buku berbasis PHP Native dengan menerapkan pola arsitektur Model-View-Controller (MVC) dan pelacakan versi menggunakan Git.

## Kebutuhan Sistem
- PHP 8.0 atau lebih baru
- MySQL / MariaDB
- Web Server (Laragon / XAMPP)
- Git

## Petunjuk Instalasi & Cara Menjalankan
1. Clone atau salin folder proyek `mvc-buku-abyan` ke direktori web server (misalnya: `C:\laragon\www\mvc-buku-abyan`).
2. Buka HeidiSQL / phpMyAdmin dan impor file skema database dari `database/perpustakaan.sql`.
3. Pastikan pengaturan koneksi database pada `config/database.php` sudah sesuai.
4. Jalankan Laragon dan buka browser dengan mengakses URL: `http://localhost/mvc-buku-abyan/public/index.php`.

## Struktur Folder Proyek
- `app/controllers/`: Menangani alur request, validasi input, dan memanggil Model/View.
- `app/models/`: Menangani logika data dan operasi CRUD ke database menggunakan PDO.
- `app/views/`: Menampilkan antarmuka HTML untuk daftar, tambah, dan edit data.
- `config/`: Konfigurasi koneksi database PDO.
- `database/`: Berisi skema SQL dan data awal (*seed data*).
- `public/`: Entry point utama aplikasi (Front Controller & Routing).

## Fitur Utama
- Menampilkan daftar buku (Read)
- Menambah data buku baru (Create)
- Mengubah data buku (Update)
- Menghapus data buku (Delete)

## Histori Pengembangan Git
Berikut adalah rekam jejak commit pengembangan proyek ini:

```text
* dafbdf4 (HEAD -> main) feat: add complete CRUD routing
* af2d4e8 feat: add CRUD views for book entity
* 27f2c5b feat: add book controller
* db17a68 feat: add book model with full CRUD operations
* df8fd69 feat: add PDO database connection
* c32bb0f feat: tambah skema database buku dan data awal
* 732e833 chore: initialize mvp php native project