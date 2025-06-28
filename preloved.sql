-- SETUP DASAR
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- BUAT DATABASE JIKA BELUM ADA
CREATE DATABASE IF NOT EXISTS preloved DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE preloved;

-- DROP SEMUA TABEL YANG MENGANDUNG RELASI KE tb_barang
DROP TABLE IF EXISTS tb_keranjang;
DROP TABLE IF EXISTS tb_stok;
DROP TABLE IF EXISTS tb_transaksi;
DROP TABLE IF EXISTS tb_pesanan;
DROP TABLE IF EXISTS barang_perlu_stok_triger;
DROP TABLE IF EXISTS laporan_penjualan;
DROP TABLE IF EXISTS tb_barang;
DROP TABLE IF EXISTS user;

-- ========== TABEL UTAMA ==========
-- TABEL BARANG
CREATE TABLE tb_barang (
  id_barang INT(11) NOT NULL AUTO_INCREMENT,
  nama_barang VARCHAR(220) NOT NULL,
  kategori VARCHAR(220) NOT NULL,
  tahun VARCHAR(13) NOT NULL,
  jumlah INT(11) NOT NULL,
  harga DOUBLE NOT NULL,
  gambar VARCHAR(220) DEFAULT NULL,
  PRIMARY KEY (id_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT  INTO tb_barang(id_barang,nama_barang,kategori,tahun,jumlah,harga,gambar) VALUES 
(1,'Dress putih','dress','2025',17,40000,'dres putih.jpg'),
(2,'Dress','dres','2025',10,33000,'dress.jpg'),
(3,'Semi Kemeja','Semi Kemeja','2025',12,23000,'garis-garis.jpg'),
(4,'Haighwaist','celana','2025',15,40000,'haighwaist.jpg'),
(5,'Hoodie crop','hoodie','2025',14,35000,'hoodie crop.jpg'),
(6,'Hot pants 1','hot pants ','2025',12,25000,'hot pants 1.jpg'),
(7,'Hot pants 2','hot pants','2025',11,50000,'hot pants 2.jpg'),
(8,'Hot pants 3','hot pants ','2025',14,25000,'hot pants 3.jpg'),
(9,'Cardigan','Cardigan','2025',10,60000,'cardigan.jpg'),
(10,'Jamsuit','jamsuit','2025',13,28000,'jamsuit.jpg'),
(11,'Jeans putih','jeans ','2025',12,60000,'jeans putih.jpg'),
(12,'Jeans putih 2','jeans','2025',12,60000,'jeans putih 2.jpg'),
(13,'Kaos itam list putih','kaos ','2025',12,28000,'kaos itam list putih.jpg'),
(14,'Kaos lucu','kaos ','2025',12,25000,'kaos lucu.jpg'),
(15,'Kaos','kaos','2025',12,25000,'kaos.jpg'),
(16,'Kemeja abu','kemeja','2025',12,33000,'kemeja abu.jpg'),
(17,'Kemeja kotak','kemeja  ','2025',10,23000,'kemeja kotak.jpg'),
(18,'Kemeja Putih','kemeja  ','2025',10,35000,'kemeja putih.jpg'),
(19,'Kemeja tebal','kemeja  ','2025',10,35000,'kemeja tebal.jpg'),
(20,'Kemeja Vintage','kemeja ','2025',20,33000,'kemeja vintage.jpg'),
(21,'Knit Abu','knit ','2025',12,28000,'knit abu.jpg'),
(22,'Knit ','knit ','2025',12,35000,'knit.jpg'),
(23,'knite','knit','2025',12,35000,'knite.jpg'),
(24,'Ootd','sweter','2025',11,25000,'ootd.jpg'),
(25,'Semi Polo',' polo ','2025',12,43000,'semi polo.jpg'),
(26,'Sweter','sweter','2025',13,27000,'sweter.jpg'),
(29,'Jamsuit hitam','jamsuit ','2025',12,40000,'jamsuit hitam.jpg');
-- TABEL USER (tanpa foreign key ke tb_pesanan)
CREATE TABLE user (
  id_user INT(11) NOT NULL AUTO_INCREMENT,
  nama VARCHAR(220) NOT NULL,
  password VARCHAR(6) NOT NULL,
  jk ENUM('l','p') NOT NULL,
  role ENUM('Admin','Pelanggan') NOT NULL,
  no_telp VARCHAR(13) NOT NULL,
  alamat TEXT NOT NULL,
  PRIMARY KEY (id_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABEL PESANAN
CREATE TABLE tb_pesanan (
  id_pesanan INT(11) NOT NULL AUTO_INCREMENT,
  id_barang INT(11) NOT NULL,
  nama_barang VARCHAR(220) NOT NULL,
  harga DOUBLE NOT NULL,
  jumlah INT(11) NOT NULL,
  kode VARCHAR(6) NOT NULL,
  tanggal DATETIME NOT NULL,
  PRIMARY KEY (id_pesanan),
  KEY id_barang (id_barang),
  CONSTRAINT tb_pesanan_ibfk_1 FOREIGN KEY (id_barang) REFERENCES tb_barang(id_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABEL TRANSAKSI
CREATE TABLE tb_transaksi (
  id_transaksi INT(11) NOT NULL AUTO_INCREMENT,
  id_pesanan INT(11) NOT NULL,
  harga DOUBLE NOT NULL,
  jumlah INT(11) NOT NULL,
  tanggal DATETIME NOT NULL,
  PRIMARY KEY (id_transaksi),
  KEY id_pesanan (id_pesanan),
  CONSTRAINT tb_transaksi_ibfk_1 FOREIGN KEY (id_pesanan) REFERENCES tb_pesanan(id_pesanan)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABEL STOK
CREATE TABLE tb_stok (
  id_barang INT(11) NOT NULL,
  stok INT(11) NOT NULL,
  PRIMARY KEY (id_barang),
  CONSTRAINT tb_stok_ibfk_1 FOREIGN KEY (id_barang) REFERENCES tb_barang(id_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABEL LAPORAN PENJUALAN
CREATE TABLE laporan_penjualan (
  id_laporan_penjualan INT(11) NOT NULL AUTO_INCREMENT,
  id_barang INT(11) NOT NULL,
  nama_barang VARCHAR(220) DEFAULT NULL,
  kategori VARCHAR(220) DEFAULT NULL,
  tahun VARCHAR(13) DEFAULT NULL,
  harga DOUBLE DEFAULT NULL,
  tanggal DATETIME DEFAULT NULL,
  PRIMARY KEY (id_laporan_penjualan),
  KEY id_barang (id_barang),
  CONSTRAINT laporan_penjualan_ibfk_1 FOREIGN KEY (id_barang) REFERENCES tb_barang(id_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABEL BARANG PERLU STOK TRIGGER
CREATE TABLE barang_perlu_stok_triger (
  id_barang INT(11) NOT NULL,
  nama_barang VARCHAR(220) DEFAULT NULL,
  kategori VARCHAR(220) DEFAULT NULL,
  tahun VARCHAR(13) DEFAULT NULL,
  jumlah INT(11) DEFAULT NULL,
  harga DOUBLE DEFAULT NULL,
  gambar VARCHAR(220) DEFAULT NULL,
  peringatan_stok VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id_barang),
  CONSTRAINT barang_perlu_stok_triger_ibfk_1 FOREIGN KEY (id_barang) REFERENCES tb_barang(id_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABEL KERANJANG
CREATE TABLE tb_keranjang (
  id_keranjang INT(11) NOT NULL AUTO_INCREMENT,
  id_user INT(11) NOT NULL,
  id_barang INT(11) NOT NULL,
  jumlah INT(11) NOT NULL,
  tanggal DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id_keranjang),
  FOREIGN KEY (id_user) REFERENCES user(id_user),
  FOREIGN KEY (id_barang) REFERENCES tb_barang(id_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ========== DATA USER & BARANG ==========

-- DATA USER
INSERT INTO user(id_user, nama, password, jk, role, no_telp, alamat) VALUES
(1, 'Dede', '123456', 'l', 'Pelanggan', '085722394826', 'Jakarta'),
(2, 'Desi', 'desipr', 'l', 'Pelanggan', '87878777', 'Madura'),
(3, 'admin', '123456', 'p', 'Admin', '085722394826', 'Telang'),
(4, 'ucok', '123456', 'p', 'Pelanggan', '098765', 'Medan'),
(5, 'Romauli', '123456', 'p', 'Pelanggan', '082163339401', 'Surabaya');

-- DATA BARANG (bisa ditambahkan jika diperlukan)

-- ========== TRIGGER ==========

DELIMITER $$

CREATE TRIGGER update_barang_perlu_stok_insert
AFTER INSERT ON tb_barang
FOR EACH ROW
BEGIN
    IF NEW.jumlah <= 10 THEN
        INSERT INTO barang_perlu_stok_triger
        (id_barang, nama_barang, kategori, tahun, jumlah, harga, gambar, peringatan_stok)
        VALUES
        (NEW.id_barang, NEW.nama_barang, NEW.kategori, NEW.tahun, NEW.jumlah, NEW.harga, NEW.gambar, 'Peringatan: Tambahkan stok')
        ON DUPLICATE KEY UPDATE
            jumlah = VALUES(jumlah),
            peringatan_stok = 'Peringatan: Tambahkan stok';
    END IF;
END$$

CREATE TRIGGER update_total_harga
BEFORE INSERT ON tb_pesanan
FOR EACH ROW
BEGIN
    DECLARE harga_unit DECIMAL(10,2);
    SELECT harga INTO harga_unit FROM tb_barang WHERE id_barang = NEW.id_barang;
    SET NEW.harga = NEW.jumlah * harga_unit;
END$$

CREATE TRIGGER pengurangan
AFTER INSERT ON tb_pesanan
FOR EACH ROW
BEGIN
    UPDATE tb_barang SET jumlah = jumlah - NEW.jumlah WHERE id_barang = NEW.id_barang;
END$$

CREATE TRIGGER update_transaksi_after_insert
AFTER INSERT ON tb_pesanan
FOR EACH ROW
BEGIN
    INSERT INTO tb_transaksi (id_pesanan, harga, jumlah, tanggal)
    VALUES (NEW.id_pesanan, NEW.harga, NEW.jumlah, NOW());
END$$

CREATE TRIGGER delete_transaksi_after_delete
AFTER DELETE ON tb_pesanan
FOR EACH ROW
BEGIN
    DELETE FROM tb_transaksi WHERE id_pesanan = OLD.id_pesanan;
END$$

DELIMITER ;

-- ========== VIEW ==========

CREATE OR REPLACE VIEW barang_favorit AS
SELECT 
    tb_barang.id_barang,
    tb_barang.nama_barang,
    tb_barang.gambar,
    SUM(tb_pesanan.jumlah) AS total_terjual,
    RANK() OVER (ORDER BY SUM(tb_pesanan.jumlah) DESC) AS peringkat
FROM tb_barang
JOIN tb_pesanan ON tb_barang.id_barang = tb_pesanan.id_barang
GROUP BY tb_barang.id_barang, tb_barang.nama_barang, tb_barang.gambar;

CREATE OR REPLACE VIEW barang_perlu_stok AS
SELECT 
    id_barang, nama_barang, kategori, jumlah,
    CASE
        WHEN jumlah <= 10 THEN 'Tambahkan stok'
        ELSE 'Stok cukup'
    END AS peringatan_stok
FROM tb_barang
WHERE jumlah <= 10;

CREATE OR REPLACE VIEW daftar_pesanan AS
SELECT 
    id_pesanan, id_barang, nama_barang, harga, jumlah, kode, tanggal
FROM tb_pesanan;

CREATE OR REPLACE VIEW laporan_penjualan1 AS
SELECT 
    tb_barang.id_barang,
    tb_pesanan.nama_barang,
    tb_barang.kategori,
    tb_barang.tahun,
    tb_pesanan.jumlah AS jumlah_barang,
    tb_barang.harga AS harga_barang,
    tb_pesanan.jumlah * tb_barang.harga AS total_harga,
    tb_pesanan.tanggal
FROM tb_barang
JOIN tb_pesanan ON tb_pesanan.id_barang = tb_barang.id_barang;

CREATE OR REPLACE VIEW rata_rata_penjualan AS
SELECT 
    ROUND(SUM(tb_transaksi.harga) / NULLIF(SUM(tb_transaksi.jumlah), 0), 0) AS rata_rata_penjualan,
    SUM(tb_transaksi.harga) AS total_penjualan
FROM tb_transaksi;

-- ========== STORED PROCEDURE ==========

DROP PROCEDURE IF EXISTS laporan_tahunan_rentang;
DELIMITER //

CREATE PROCEDURE laporan_tahunan_rentang(IN tahun_awal INT, IN tahun_akhir INT)
BEGIN
    SELECT 
        YEAR(t.tanggal) AS tahun,
        b.nama_barang,
        b.kategori,
        SUM(t.jumlah) AS total_terjual,
        SUM(t.harga) AS total_pendapatan
    FROM tb_transaksi t
    JOIN tb_pesanan p ON t.id_pesanan = p.id_pesanan
    JOIN tb_barang b ON p.id_barang = b.id_barang
    WHERE YEAR(t.tanggal) BETWEEN tahun_awal AND tahun_akhir
    GROUP BY tahun, b.id_barang;
END //

DELIMITER ;




-- KEMBALIKAN PENGECEKAN FOREIGN KEY
SET FOREIGN_KEY_CHECKS = 1;
