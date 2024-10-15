<?php
// Deklarasi kelas Person
class Person {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Person
    protected $nama;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nilai atribut nama
    public function getName() {
        return $this->nama; //Menetapkan nilai parameter $nama ke atribut nama
    }

    // Metode untuk menampilkan informasi peran
    public function getRole() {
        return "Umum";
    }
}

// Deklarasi kelas Dosen
class Dosen extends Person {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Dosen
    private $nidn;
    private $mataKuliah;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama, $nidn, $mataKuliah) {
        parent::__construct($nama);
        $this->nidn = $nidn;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk mendapatkan nilai atribut nidn
    public function getNIDN() {
        return $this->nidn; //Mengembalikan nilai atribut nidn
    }

    //Metode untuk mengatur nilai atribut nidn
    public function setNIDN($nidn) {
        $this->nidn = $nidn; //Menetapkan nilai parameter $nidn ke atribut nidn
    }

    // Metode untuk mendapatkan nilai atribut mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah; //Mengembalikan nilai atribut mataKuliah
    }

    //Metode untuk mengatur nilai atribut mataKuliah
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah; //Menetapkan nilai parameter $mataKuliah ke atribut mataKuliah
    }
 
    // Override metode untuk menampilkan peran dosen
    public function getRole() {
        return $this->nama . " adalah seorang Dosen dengan NIDN " . $this->nidn . " yang mengampu mata kuliah " . $this->mataKuliah . ".<br>";
    }
}

// Deklarasi kelas Mahasiswa
class Mahasiswa extends Person {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Mahasiswa
    private $nim;
    private $jurusan;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama, $nim) {
        parent::__construct($nama); //Memanggil konstruktor dari super class
        $this->nim = $nim;
    }

    // Metode untuk mendapatkan nilai atribut nim
    public function getNIM() {
        return $this->nim; //Mengembalikan nilai atribut nim
    }

    //Metode untuk mengatur nilai atribut nim
    public function setNIM($nim) {
        $this->nim = $nim; //Menetapkan nilai parameter $nim ke atribut nim
    }

    // Metode untuk mendapatkan nilai atribut jurusan
    public function getJurusan() {
        return $this->jurusan; //Mengembalikan nilai atribut jurusan
    }

    //Metode untuk mengatur nilai atribut jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan; //Menetapkan nilai parameter $jurusan ke atribut jurusan
    }

    // Override metode untuk menampilkan peran mahasiswa
    public function getRole() {
        return $this->nama . " adalah seorang Mahasiswa dengan NIM " . $this->nim . " yang berasal dari jurusan " . $this->jurusan . ".<br>";
    }
}

// Deklarasi kelas abstrak Jurnal
abstract class Jurnal {
    // Metode abstrak yang akan diimplementasikan oleh kelas turunan
    abstract public function pengajuanJurnal();
}

// Deklarasi kelas JurnalDosen mewarisi kelas Jurnal
class JurnalDosen extends Jurnal{
    // Metode yang diimplementasikan dari super class
    public function pengajuanJurnal() {
        return "Dosen dapat melakukan pengelolaan pengajuan jurnal menggunakan akses Dosen";
    }
}

// Deklarasi kelas JurnalMahasiswa mewarisi kelas Jurnal
class JurnalMahasiswa extends Jurnal {
    // Metode yang diimplementasikan dari super class
    public function pengajuanJurnal() {
        return "Mahasiswa dapat melakukan pengelolaan pengajuan jurnal menggunakan akses Mahasiswa";
    }
}

// Pembuatan objek baru menggunakan parameter
$mhs1 = new Mahasiswa("Kazuha", "230102065", "Rekayasa Elektronika dan Mekatronika");
$jurnalMhs = new JurnalMahasiswa();
//Memanggil metode untuk menampilkan data 
echo $mhs1->getRole();
echo $jurnalMhs->pengajuanJurnal();

// Pembuatan objek baru menggunakan parameter
$dsn1 = new Mahasiswa("Nahida", "987654321", "Bahasa Inggris");
$jurnalDsn = new JurnalMahasiswa();
//Memanggil metode untuk menampilkan data 
echo $dsn1->getRole();
echo $jurnalDsn->pengajuanJurnal();

