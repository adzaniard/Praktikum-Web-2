<?php
// Deklarasi kelas abstrak Pengguna
abstract class Pengguna {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Pengguna
    protected $nama;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak yang akan diimplementasikan oleh kelas turunan
    abstract function aksesFitur();
}

// Deklarasi kelas Dosen mewarisi kelas Pengguna
class Dosen extends Pengguna {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Dosen
    private $mataKuliah;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); //Memanggil konstruktor dari super class
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan informasi akses fitur dengan mengembalikan nilai dari atribut
    public function aksesFitur() {
        return "Dosen " . $this->nama . " yang mengampu mata kuliah " . $this->mataKuliah . ", mendapatkan akses fitur Pegawai.";
    }
}

// Deklarasi kelas Mahasiswa mewarisi kelas Pengguna
class Mahasiswa extends Pengguna {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Mahasiswa
    private $nim;
    private $jurusan;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan informasi akses fitur dengan mengembalikan nilai dari atribut
    public function aksesFitur() {
        return "Mahasiswa " . $this->nama . " dengan NIM " . $this->nim . " dari Jurusan " . $this->jurusan . " mendapatkan akses fitur Pengguna Terdaftar.";
    }
}
// Pembuatan objek baru menggunakan parameter
$dsn1 = new Dosen("Kaveh", "Ukur Tanah");
echo $dsn1->aksesFitur(); //Memanggil metode untuk menampilkan data
echo "<br>";

// Pembuatan objek baru menggunakan parameter
$mhs1 = new Mahasiswa("Adzania", "230202049", "Komputer dan Bisnis");
echo $mhs1->aksesFitur(); //Memanggil metode untuk menampilkan data
?>