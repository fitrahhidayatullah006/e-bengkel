##################
Tentang E-Bengkel
##################

E-Bengkel merupakan Sistem Informasi Manajemen Bengkel berbasis web yang
dikembangkan menggunakan Framework CodeIgniter 3. Aplikasi ini dibuat untuk
membantu proses pengelolaan data bengkel seperti data layanan, mekanik,
motor, serta booking servis kendaraan.

Sistem ini dirancang agar proses administrasi bengkel menjadi lebih mudah,
cepat, dan terorganisir dengan baik melalui antarmuka berbasis web.

*******************
Informasi Proyek
*******************

Repository ini berisi source code aplikasi **E-Bengkel** yang dikembangkan
sebagai proyek pembelajaran dan tugas mata kuliah.

***********************
Fitur Utama Aplikasi
***********************

Aplikasi memiliki beberapa fitur utama, antara lain:

- Login Admin
- Dashboard Statistik
- Manajemen Data Motor (CRUD)
- Manajemen Data Mekanik (CRUD)
- Manajemen Data Layanan (CRUD)
- Manajemen Booking Servis (CRUD)
- Pencarian Data
- Validasi Booking
- Logout

Selain itu sistem juga menerapkan beberapa aturan bisnis, seperti:

- Motor yang sedang dibooking tidak dapat dipilih kembali.
- Mekanik yang sedang menangani servis tidak dapat menerima booking lain.
- Motor dan mekanik kembali tersedia apabila status booking berubah menjadi
  **Selesai** atau **Dibatalkan**.

*******************
Persyaratan Server
*******************

Aplikasi ini direkomendasikan menggunakan:

- PHP 8.2 atau lebih baru
- MySQL / MariaDB
- Apache (XAMPP)
- CodeIgniter 3
- Web Browser (Google Chrome, Microsoft Edge, Mozilla Firefox)

************
Instalasi
************

1. Clone repository.

```
git clone https://github.com/username/e-bengkel.git
```

2. Pindahkan project ke folder:

```
htdocs/
```

3. Buat database baru dengan nama:

```
e_bengkel
```

4. Import file database:

```
database/e_bengkel.sql
```

5. Atur konfigurasi database pada file:

```
application/config/database.php
```

6. Jalankan Apache dan MySQL melalui XAMPP.

7. Akses aplikasi melalui browser:

```
http://localhost/e-bengkel
```

*******************
Struktur Database
*******************

Database terdiri dari beberapa tabel utama:

- users
- motor
- mekanik
- layanan
- booking

*********
Teknologi
*********

Aplikasi ini dikembangkan menggunakan:

- PHP
- CodeIgniter 3
- MySQL
- Bootstrap 5
- HTML5
- CSS3
- JavaScript

******************
Struktur Project
******************

```
application/
│
├── controllers/
│   ├── Auth.php
│   ├── Dashboard.php
│   ├── Booking.php
│   ├── Layanan.php
│   ├── Mekanik.php
│   └── Motor.php
│
├── models/
│   ├── Auth_model.php
│   ├── Booking_model.php
│   ├── Layanan_model.php
│   ├── Mekanik_model.php
│   └── Motor_model.php
│
├── views/
│   ├── auth/
│   ├── booking/
│   ├── dashboard/
│   ├── layanan/
│   ├── mekanik/
│   ├── motor/
│   └── templates/
```

************
Pengembang
************

Nama : Handi Jian Ali
NIM : 24010110070

Nama : Muhamad dheniz wedi
NIM : 24010110073

Nama : Fitrah Hidayatullah
NIM : 24010110116

Program Studi : Ilmu Komputer

*********
Lisensi
*********

Aplikasi ini dibuat untuk keperluan pembelajaran, pengembangan, dan tugas
perkuliahan. Penggunaan source code diperbolehkan untuk tujuan edukasi dengan
tetap mencantumkan sumber apabila digunakan kembali.

****************
Ucapan Terima Kasih
****************

Terima kasih kepada:

- Dosen pengampu mata kuliah.
- Universitas Bumigora.
- Tim pengembang CodeIgniter.
- Seluruh pihak yang telah mendukung proses pengembangan aplikasi ini.
