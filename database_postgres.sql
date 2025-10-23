CREATE TABLE IF NOT EXISTS mahasiswa (
    id SERIAL PRIMARY KEY,
    nim VARCHAR(15) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    kelas VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mahasiswa (nim, nama, kelas) VALUES
('202300010', 'Ubaidillah', 'SIB-3A'),
('202300012', 'Ahmad Fauzi', 'SIB-3B'),
('202300013', 'Siti Rahma', 'SIB-3A'),
('202300014', 'Budi Santoso', 'SIB-3C'),
('202300015', 'Maya Sari', 'SIB-3B');

SELECT * FROM mahasiswa;