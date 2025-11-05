CREATE DATABASE IF NOT EXISTS db_rumahsakit;
USE db_rumahsakit;

CREATE TABLE IF NOT EXISTS pasien (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nama VARCHAR(100) NOT NULL,
  umur INT(3) NOT NULL,
  jenis_kelamin ENUM('Laki-laki','Perempuan') NOT NULL,
  alamat TEXT NOT NULL,
  penyakit VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pasien (nama, umur, jenis_kelamin, alamat, penyakit) VALUES
('Ahmad Fauzi', 45, 'Laki-laki', 'Jl. Merdeka No. 12, Palembang', 'Demam Berdarah'),
('Siti Nuraini', 32, 'Perempuan', 'Jl. Anggrek No. 45, Palembang', 'Tifus'),
('Dedi Kurniawan', 27, 'Laki-laki', 'Jl. Rajawali No. 88, Palembang', 'Flu Berat'),
('Rina Kartika', 40, 'Perempuan', 'Jl. Melati No. 56, Palembang', 'Hipertensi'),
('Budi Santoso', 60, 'Laki-laki', 'Jl. Veteran No. 23, Palembang', 'Diabetes'),
('Laila Amalia', 25, 'Perempuan', 'Jl. Semeru No. 101, Palembang', 'Asma'),
('Joko Susilo', 52, 'Laki-laki', 'Jl. Pahlawan No. 7, Palembang', 'Jantung Koroner'),
('Fitri Handayani', 36, 'Perempuan', 'Jl. Kenanga No. 19, Palembang', 'Magh Kronis'),
('Rudi Hartono', 30, 'Laki-laki', 'Jl. Demang No. 10, Palembang', 'Infeksi Paru-Paru'),
('Mega Sari', 22, 'Perempuan', 'Jl. Pertiwi No. 3, Palembang', 'Covid-19');
