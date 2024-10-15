<?php
// Deklarasi kelas Mahasiswa
class Mahasiswa {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan informasi dengan mengembalikan nilai dari atribut
    public function tampilkanData() {
        return "Mahasiswa bernama $this->nama, dengan NIM $this->nim berasal dari Jurusan $this->jurusan.";
    }
}

// Pembuatan objek baru tanpa parameter awal
$mhs1 = new Mahasiswa();
// Menetapkan nilai atribut
$mhs1->nama = "Adzania";
$mhs1->nim = "230202049";
$mhs1->jurusan = "Komputer dan Bisnis";
//Memanggil metode untuk menampilkan data 
echo $mhs1->tampilkanData(); 
?>