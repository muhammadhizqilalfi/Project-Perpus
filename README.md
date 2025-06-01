<p align="center"><img src = "/image/Logo2.png" width=100px></p>

<p align="center">
    <a href="https://skillicons.dev">
        <img src="https://skillicons.dev/icons?i=laravel,mysql,html,tailwind,css,php" alt="CODE">
    </a>
</p>

## Nama : Muhammad Hizqil Alfi
## NPM  : 2308107010046

# Deskripsi
Labirin Kata adalah sebuah website manajemen perpustakaan yang dirancang untuk mempermudah proses peminjaman dan pengelolaan buku secara digital, baik untuk pengguna (siswa/anggota) maupun admin (pengelola perpustakaan).

# User Interface dan Fitur
Web ini memiliki user interface dan beberapa fitur :

#### Halaman Autentikasi
- Login
- Register
- Forget Password
- Reset Password

#### Dashboard Pengguna (User)

- Katalog Buku  
    - Mencari Buku, Melakukan Reservasi

- Riwayat Peminjaman Buku

- Reservasi
    - Membatalkan Reservasi

- Denda

#### Dashboard Admin

- Manajemen Buku
    - Menambah
    - Menghapus
    - Mengedit Buku 

- Manajemen Reservasi
    - Menyetujui Reservasi
    - Menolak Reservasi

- Riwayat Peminjaman
    - Rekap Peminjaman
    - Export PDF

- Manajemen Denda Pengguna
    - Membatalkan Denda
    - Menambah Denda

#### Profile Pengguna

- Mengubah Nama
- Mengubah Email
- Mengubah Password
- Hapus Akun

#### Profile Admin

- Mengubah Password
- Hapus Akun

# Cara Instalasi
1. Clone Repository
    ```bash
    git clone https://github.com/muhammadhizqilalfi/Project-Perpus.git
    cd Project-Perpus
    ```
2. Update & Install Dependencies
    ```bash
    composer update
    composer install
    npm install
    ```
3. Setup .env
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4. Konfigurasi Database di .env
    ```mysql
    DB_CONNECTION = mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=labirin_kata
    DB_USERNAME=root
    DB_PASSWORD=
    ```
5. Migrasi Database
    ```bash
    php artisan migrate
    ```
6. Seeding Data
    ```bash
    php artisan db:seed
    ```
7. Compile Assets
    ```bash
    npm run dev
    ```
8. Jalankan Server
    ```bash
    php artisan serve
    ```

# Akun Admin
#### Admin
- Email : admin@labirinkata.com
- Password : admin1234

# Link
- Youtube : https://youtu.be/iizzk8dbrJ0
- Canva   : https://www.canva.com/design/DAGpJN902fs/WrSsXJBn0OhjxsGWwpnUTg/edit?utm_content=DAGpJN902fs&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton

# Gambar
<p align="center"><img src = "/image/Gambar1.png" width=200px></p>
<p align="center"><img src = "/image/Gambar2.png" width=200px></p>
<p align="center"><img src = "/image/Gambar3.png" width=200px></p>
<p align="center"><img src = "/image/Gambar4.png" width=200px></p>

