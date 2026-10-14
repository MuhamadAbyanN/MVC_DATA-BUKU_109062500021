CREATE DATABASE IF NOT EXISTS perpustakaan
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE perpustakaan;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isbn VARCHAR(20) NOT NULL UNIQUE,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    penerbit VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO buku (isbn, judul, penulis, penerbit, tahun_terbit) VALUES
('978-0156012195', 'The Little Prince', 'Antoine de Saint-Exupéry', 'Reynal & Hitchcock', 1943),
('978-0062315007', 'The Alchemist', 'Paulo Coelho', 'HarperOne', 1988),
('978-0140317534', 'Momo', 'Michael Ende', 'Thienemann Verlag', 1973);