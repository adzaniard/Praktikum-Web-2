<?php
// Deklarasi kelas Mahasiswa
class Mahasiswa {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Mahasiswa
    private $nama;
    private $nim;
    private $jurusan;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk mendapatkan nilai atribut nama
    public function getNama() {
        return $this->nama; //Mengembalikan nilai atribut nama
    }

    //Metode untuk mengatur nilai atribut nama
    public function setNama($nama) {
        $this->nama = $nama; //Menetapkan nilai parameter $nama ke atribut nama
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
}

// Pembuatan objek baru menggunakan parameter
$mhs1 = new Mahasiswa("Adzania", "230202049", "Komputer dan Bisnis");

//Memanggil metode getter untuk menampilkan data 
echo "<b>Data Mahasiswa yang belum diperbarui:</b><br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "NIM: " . $mhs1->getNIM() . "<br>";
echo "Jurusan: " . $mhs1->getJurusan() . "<br>";

//Memanggil metode setter untuk mengubah nilai atribut
$mhs1->setNama("Xiao");
$mhs1->setNIM("230102058");
$mhs1->setJurusan("Rekayasa Elektronika dan Mekatronika");

//Memanggil metode getter untuk menampilkan data 
echo "<br><b>Data Mahasiswa yang sudah diperbarui menggunakan metode setter:</b><br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "NIM: " . $mhs1->getNIM() . "<br>";
echo "Jurusan: " . $mhs1->getJurusan() . "<br>";
?>