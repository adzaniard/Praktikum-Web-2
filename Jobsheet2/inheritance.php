<?php
// Deklarasi kelas Pengguna
class Pengguna {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Pengguna
    protected $nama;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nilai atribut nama
    public function getNama() {
        return $this->nama; //Menetapkan nilai parameter $nama ke atribut nama
    }
}

// Deklarasi kelas Dosen mewarisi kelas Pengguna
class Dosen extends Pengguna {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Pengguna
    private $mataKuliah;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); //Memanggil konstruktor dari super class
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk mendapatkan nilai atribut mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah; //Menetapkan nilai parameter $mataKuliah ke atribut mataKuliah
    }
}

// Pembuatan objek baru menggunakan parameter
$dsn1 = new Dosen("Kaveh", "Ukur Tanah");
//Memanggil metode getter untuk menampilkan data 
echo "Dosen " . $dsn1->getNama() . " mengampu mata kuliah " . $dsn1->getMataKuliah() . "";
?>
