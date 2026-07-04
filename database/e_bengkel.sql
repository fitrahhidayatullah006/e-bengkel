-- =====================================================
-- DATABASE E-BENGKEL
-- =====================================================

CREATE DATABASE IF NOT EXISTS e_bengkel;
USE e_bengkel;

-- =====================================================
-- TABEL USERS
-- =====================================================

CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','pelanggan') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (nama, username, password, role)
VALUES
('Administrator','admin',MD5('admin123'),'admin');

-- =====================================================
-- TABEL MEKANIK
-- =====================================================

CREATE TABLE mekanik (
    id_mekanik INT AUTO_INCREMENT PRIMARY KEY,
    nama_mekanik VARCHAR(100) NOT NULL,
    no_hp VARCHAR(20),
    alamat TEXT,
    status ENUM('Aktif','Tidak Aktif') DEFAULT 'Aktif'
);

INSERT INTO mekanik (nama_mekanik,no_hp,alamat)
VALUES
('Budi','081234567890','Pontianak');

-- =====================================================
-- TABEL LAYANAN
-- =====================================================

CREATE TABLE layanan (
    id_layanan INT AUTO_INCREMENT PRIMARY KEY,
    nama_layanan VARCHAR(100) NOT NULL,
    harga DECIMAL(12,2) NOT NULL,
    deskripsi TEXT
);

INSERT INTO layanan (nama_layanan,harga,deskripsi)
VALUES
('Ganti Oli',80000,'Penggantian oli mesin'),
('Servis Ringan',150000,'Servis berkala'),
('Tune Up',250000,'Tune Up Mesin');

-- =====================================================
-- TABEL MOTOR
-- =====================================================

CREATE TABLE motor (
    id_motor INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    merk VARCHAR(50),
    tipe VARCHAR(50),
    tahun VARCHAR(4),
    nomor_polisi VARCHAR(20),
    FOREIGN KEY (id_user)
        REFERENCES users(id_user)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

-- =====================================================
-- TABEL BOOKING
-- =====================================================

CREATE TABLE booking (
    id_booking INT AUTO_INCREMENT PRIMARY KEY,

    id_motor INT NOT NULL,

    id_layanan INT NOT NULL,

    id_mekanik INT NOT NULL,

    tanggal_booking DATE NOT NULL,

    jam_booking TIME NOT NULL,

    keluhan TEXT,

    status ENUM(
        'Menunggu',
        'Diproses',
        'Selesai',
        'Dibatalkan'
    ) DEFAULT 'Menunggu',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_motor)
        REFERENCES motor(id_motor)
        ON UPDATE CASCADE
        ON DELETE CASCADE,

    FOREIGN KEY (id_layanan)
        REFERENCES layanan(id_layanan)
        ON UPDATE CASCADE
        ON DELETE CASCADE,

    FOREIGN KEY (id_mekanik)
        REFERENCES mekanik(id_mekanik)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

-- =====================================================
-- DATA DUMMY PELANGGAN
-- =====================================================

INSERT INTO users (nama,username,password,role)
VALUES
('Andi','andi',MD5('123456'),'pelanggan');

INSERT INTO motor(id_user,merk,tipe,tahun,nomor_polisi)
VALUES
(2,'Honda','Beat','2022','KB 1234 XX');

INSERT INTO booking
(id_motor,id_layanan,id_mekanik,tanggal_booking,jam_booking,keluhan,status)
VALUES
(1,1,1,CURDATE(),'09:00:00','Mesin terasa kasar','Menunggu');