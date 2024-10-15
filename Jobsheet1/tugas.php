<?php
// Deklarasi kelas Dosen
class Dosen {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Dosen
    public $nama;
    public $nip;
    public $mataKuliah;

    // Metode untuk menampilkan informasi dengan mengembalikan nilai dari atribut
    public function tampilkanDosen() {
        return "Dosen $this->nama dengan NIP $this->nip mengampu mata kuliah $this->mataKuliah.";
    }
}

// Pembuatan objek mahasiswa baru menggunakan parameter awal
$dsn1= new Dosen();
// Menetapkan nilai atribut
$dsn1->nama = "Kim Junkyu";
$dsn1->nip = "123456789";
$dsn1->mataKuliah = "Gambar Teknik";
//Memanggil metode untuk menampilkan data setelah diperbarui
echo $dsn1->tampilkanDosen(); 
?>