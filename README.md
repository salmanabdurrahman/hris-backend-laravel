# SimpleHRIS Backend (API)

## 📝 Deskripsi

Ini adalah backend RESTful API untuk aplikasi **SimpleHRIS**. Dibangun dengan **Laravel**, API ini menyediakan autentikasi dan operasi CRUD untuk data pegawai dan divisi, menggunakan arsitektur yang terstruktur agar mudah dikembangkan dan dikelola.

## ✨ Fitur Utama & Endpoints

API ini menyediakan endpoint utama berikut:

- **Autentikasi:**
    - `POST /api/v1/login` — Login & dapatkan token.
    - `POST /api/v1/logout` — Logout & hapus token.

- **Pegawai:**
    - `GET /api/v1/employees` — List pegawai (filter & paginasi).
    - `POST /api/v1/employees` — Tambah pegawai.
    - `GET /api/v1/employees/{id}` — Detail pegawai.
    - `PUT /api/v1/employees/{id}` — Update pegawai.
    - `DELETE /api/v1/employees/{id}` — Hapus pegawai.

- **Divisi:**
    - `GET /api/v1/divisions` — List divisi (filter & paginasi).

## 🚀 Teknologi yang Digunakan

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Postman](https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white)

## ⚙️ Cara Menjalankan Proyek

Untuk menjalankan API ini di lingkungan pengembangan lokal Anda, ikuti langkah-langkah berikut:

1.  **Clone repository ini:**

    ```bash
    git clone https://github.com/salmanabdurrahman/hris-backend-laravel.git
    cd hris-backend-laravel
    ```

2.  **Install dependencies Composer:**

    ```bash
    composer install
    ```

3.  **Setup Environment File:**
    Salin file `.env.example` menjadi `.env`.

    ```bash
    cp .env.example .env
    ```

4.  **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

5.  **Konfigurasi Database:**
    Buka file `.env` dan sesuaikan pengaturan database Anda (nama database, username, password).

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=hris_backend_laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

    Pastikan Anda sudah membuat database `hris_backend_laravel` (atau nama lain) di PhpMyAdmin/HeidiSQL Anda.

6.  **Jalankan Migrasi dan Seeder:**
    Perintah ini akan membuat semua tabel dan mengisi data awal (admin & divisi).

    ```bash
    php artisan migrate --seed
    ```

7.  **Buat Symbolic Link untuk Storage:**
    Ini penting agar file gambar yang di-upload bisa diakses secara publik.

    ```bash
    php artisan storage:link
    ```

8.  **Jalankan Development Server:**

    ```bash
    php artisan serve
    ```

9.  **API Siap Digunakan!**
    API Anda sekarang berjalan di `http://127.0.0.1:8000`. Gunakan Postman untuk mulai menguji endpoint.

10. **Kredensial untuk Login:**

- **Endpoint:** `POST /api/v1/login`
- **Username:** `admin`
- **Password:** `admin123`

## 🤝 Berkontribusi

Proyek ini dibuat untuk tujuan _technical test_. Jika Anda menemukan bug atau punya ide untuk perbaikan, silakan buka _issue_ atau buat _pull request_.
