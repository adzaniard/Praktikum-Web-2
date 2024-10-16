<?php
// Deklarasi kelas Mahasiswa
class Mahasiswa {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan informasi dengan mengembalikan nilai dari atribut
    public function tampilkanData() {
        return "Mahasiswa bernama $this->nama, dengan NIM $this->nim berasal dari Jurusan $this->jurusan.";
    }
}

// Pembuatan objek mahasiswa baru menngunakan parameter awal
$mhs1 = new Mahasiswa("Adzania", "230202049", "Komputer dan Bisnis");
//Memanggil metode untuk menampilkan data
echo $mhs1->tampilkanData();
