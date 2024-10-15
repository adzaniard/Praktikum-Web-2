# PraktikumWeb2-Tugas1
## Object-Oriented Programming
Object-Oriented Programming (OOP) atau Pemrograman Berorientasi Objek merupakan salah satu paradigma pemrograman yang berfokus pada konsep objek. Dalam OOP, program dibangun dengan menggabungkan data dan perilaku dalam bentuk "objek", di mana setiap objek adalah representasi dari entitas di dunia nyata atau abstrak. Konsep dasar OOP yang menggunakan kelas dan  objek memberikan cara yang lebih modular dan terstruktur dalam membangun program, yang memungkinkan pengembangan perangkat lunak menjadi lebih mudah dipelihara dan diperluas. 
### Prinsip-prinsip dasar OOP
1. Encapsulation (Enkapsulasi)<br>
2. Inheritance (Pewarisan)<br>
3. Polymorphism (Polimorfisme)<br>
4. Abstraction (Abstraksi)<br>

## Jobsheet 1 : Menggunakan Konsep Kelas dan Objek dalam PHP
### INSTRUKSI KERJA:
**1. Membuat Class dan Object**<br>
- **Buat class `Mahasiswa` yang memiliki atribut `nama`, `nim`, dan `jurusan`.**<br>
  Class merupakan struktur atau blueprint (cetak biru) untuk membuat objek. Sebuah class mendefinisikan atribut (properties) dan metode (functions) yang dimiliki oleh objek.<br>
  >Mendeklarasikan class baru bernama `Mahasiswa` yang akan digunakan untuk membuat objek yang mewakili mahasiswa.
  ```
  <?php
  // Deklarasi kelas Mahasiswa
  class Mahasiswa {
  ```
  Atribut atau properties adalah variabel yang dideklarasikan dalam suatu kelas dan digunakan untuk menyimpan data yang berkaitan dengan objek yang berasal dari kelas tersebut.<br>
  >Mendeklarasikan atribut `nama`, `nim`, dan `jurusan` untuk menyimpan data yang berkaitan dengan atribut tersebut.
  ```
  <?php
  // Deklarasi kelas Mahasiswa
  class Mahasiswa {
      // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Mahasiswa
      public $nama;
      public $nim;
      public $jurusan;
  ```
- **Buat metode `tampilkanData()` dalam class `Mahasiswa`.**<br>
  Metode adalah fungsi atau prosedur yan digunakan untuk  mendefinisikan tindakan yang dapat dilakukan oleh objek. Di dalam metode dapat mengakses atribut yang ada dalam kelas dan melakukan operasi terhadap atribut tersebut. Metode memiliki 3 aksesibilitas sebagai berikut:
  1. Public: dapat diakses secara umum.
  2. Protected: dapat diakses oleh kelas itu sendiri dan kelas turunannya.
  3. Private: hanya dapat diakses di dalam kelas itu sendiri.<br><br>
  >Membuat metode `tampilData()` untuk menampilkan informasi dengan mengakses nilai atribut menggunakan `$this`.
  ```
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
  ```
- **Instansiasi objek dari class `Mahasiswa` dan tampilkan data mahasiswa tersebut.**<br>
  Objek merupakan sebuah variabel yang dibuat berdasarkan kelas dan berfungsi sebagai instansiasi dari kelas. Objek dapat mengakses atribut dan metode di dalam kelas yang diinstansiasi.
  >Membuat objek baru dari kelas `Mahasiswa` menggunakan kata kunci `new`. Objek tersebut disimpan dalam variabel `$mhs1`. Kemudian menggunakan metode `tampilData()` dari kelas `Mahasiswa` untuk menampilkan informasi dengan cara memanggil metode melalui objek `$mhs1`. 
  ```
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
  ```
- **Hasil Output**<br>

**2. Implementasi Constructor**<br>
- **Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut `nama`, `nim`, dan `jurusan`.**<br>
  Konstruktor adalah metode khusus yang secara otomatis dipanggil ketika sebuah objek dibuat dari kelas. Fungsi utama dari konstruktor adalah untuk menginisialisasi atribut (properties) objek dengan nilai tertentu saat objek tersebut dibuat.<br>
  >Menambahkan metode `__construct()` dengan tiga parameter `$nama`, `$nim`, `$jurusan`, serta penggunaan `$this` untuk menetapkan nilai parameter ke atribut. 
  ```
  <?php
  // Deklarasi kelas Mahasiswa
  class Mahasiswa
  {
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
  ```
- **Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.**<br>
  >Memberikan nilai awal atribut di parameter objek `$mhs1`. 
  ```
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
  ```
- **Hasil Output:**<br>

**3. Membuat Metode Tambahan**<br>
- **Buat metode `updateJurusan()` dalam kelas `Mahasiswa` yang memungkinkan
perubahan jurusan.**<br>
  >Menambahkan metode `updateJurusan()` untuk memperbarui nilai atribut `jurusan` dengan nilai baru yang diberikan sebagai parameter `$jurusanNew`.
  ```
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

    // Metode untuk memperbarui dengan menetapkan nilai atribut yang baru
    public function updateJurusan($jurusanNew) {
        $this->jurusan = $jurusanNew;
    }
  }
  ```
- **Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.**<br>
  >Memanggil metode `updateJurusan()` untuk memperbarui nilai atribut `jurusan` dari objek `$mhs1` menjadi `"Teknik"`.
  ```
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

    // Metode untuk memperbarui dengan menetapkan nilai atribut yang baru
    public function updateJurusan($jurusanNew) {
        $this->jurusan = $jurusanNew;
    }
  }
  
  // Pembuatan objek mahasiswa baru menggunakan parameter awal
  $mhs1 = new Mahasiswa("Adzania", "230202049", "Komputer dan Bisnis");
  //Memanggil metode untuk menampilkan data awal
  echo "<b>Data Mahasiswa yang belum diperbarui:</b><br>";
  echo $mhs1->tampilkanData();
  echo "<br>";
  
  // Memperbarui data dengan memanggil metode updateJurusan
  $mhs1->updateJurusan("Teknik");
  
  //Memanggil metode untuk menampilkan data setelah diperbarui
  echo "<b>Data Mahasiswa yang sudah diperbarui:</b><br>"; 
  echo $mhs1->tampilkanData();
  
  ?>
  ```
- **Hasil Output**<br>

**4. Penggunaan Atribut dan Metode**<br>
- **Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.**<br>
  >Menambahkan metode setter `setNIM()` untuk memperbarui nilai atribut `nim` dengan nilai baru yang diberikan sebagai parameter `$nimNew`.
- **Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().**<br>
  >Memanggil metode `setNIM()` untuk memperbarui nilai atribut `nim` dari objek `$mhs1` menjadi `"230202055"`.
  ```
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

    // Metode untuk memperbarui jurusan dengan menetapkan nilai atribut jurusan yang baru
    public function updateJurusan($jurusanNew) {
        $this->jurusan = $jurusanNew;
    }

    // Metode setter untuk memperbarui nim dengan menetapkan nilai atribut nim yang baru 
    public function setNIM($nimNew) {
        $this->nim = $nimNew;
    }
  }
  
  // Pembuatan objek mahasiswa baru menggunakan parameter awal
  $mhs1 = new Mahasiswa("Adzania", "230202049", "Komputer dan Bisnis");
  //Memanggil metode untuk menampilkan data awal
  echo "<b>Data Mahasiswa yang belum diperbarui</b><br>";
  echo $mhs1->tampilkanData();
  echo "<br>";
  
  // Memperbarui data dengan memanggil metode updateJurusan
  $mhs1->updateJurusan("Teknik");
  // Memperbarui data dengan memanggil metode setNIM
  $mhs1->setNIM("230202055");
  
  //Memanggil metode untuk menampilkan data setelah diperbarui
  echo "<b>Data Mahasiswa yang sudah diperbarui:</b><br>";
  echo $mhs1->tampilkanData();
  ?>
  ```
- **Hasil Output**<br>

### INSTRUKSI KERJA:
**1. Implementasikan kelas Dosen dengan atribut `nama`, `nip`, dan `mataKuliah`**<br>
>Mendeklarasikan class baru bernama `Dosen` yang akan digunakan untuk membuat objek yang mewakili dosen. Kemudian Mendeklarasikan atribut `nama`, `nip`, dan `mataKuliah` untuk menyimpan data yang berkaitan dengan atribut tersebut.
  ```
  <?php
  // Deklarasi kelas Dosen
  class Dosen {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Dosen
    public $nama;
    public $nip;
    public $mataKuliah;
  ```
**2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.**<br>
>Membuat metode `tampilDosen()` untuk menampilkan informasi dengan mengakses nilai atribut menggunakan `$this`.
  ```
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
  ```
**3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut**<br>
>Membuat objek baru dari kelas `Dosen` menggunakan kata kunci `new`. Objek tersebut disimpan dalam variabel `$dsn1`. Kemudian menggunakan metode `tampilDosen()` dari kelas `Dosen` untuk menampilkan informasi dengan cara memanggil metode melalui objek `$dsn1`.
```
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
```
**Hasil Output:**<br>


## Jobsheet 2 : Implementasi Prinsip OOP dalam PHP
### INSTRUKSI KERJA:
**1. Membuat Class dan Object**<br>
- **Buat class `Mahasiswa` yang memiliki atribut `nama`, `nim`, dan `jurusan`.**<br>
- **Buat metode `tampilkanData()` dalam class `Mahasiswa`.**<br>
- **Instansiasi objek dari class `Mahasiswa` dan tampilkan data mahasiswa tersebut.**<br>
**2. Encapsulation**<br>
- **Ubah atribut dalam class `Mahasiswa` menjadi `private`**<br>
- **Buat metode `getter` dan `setter` untuk atribut `nama`, `nim`, dan `jurusan`.**<br>
- **Demonstrasikan akses ke atribut menggunakan metode `getter` dan `setter`.**<br>
**3. Inheritance**<br>
- **Buat class `Pengguna` dengan atribut `nama` dan metode `getNama()`.**<br>
- **Buat class `Dosen` yang mewarisi class `Pengguna` dan tambahkan atribut `mataKuliah`**<br>
- **Instansiasi objek dari class `Dosen` dan tampilkan data dosen.**<br>
**4. Polymorphism**<br>
- **Buat class `Pengguna` dengan metode `aksesFitur()`.**<br>
- **Implementasikan `aksesFitur()` dengan cara berbeda di class `Dosen` dan `Mahasiswa`.**<br>
- **Instansiasi objek dari class `Dosen` dan `Mahasiswa`, lalu panggil metode `aksesFitur()`.**<br>
**5. Abstraction**<br>
- **Buat class `abstrak Penggun`a dengan metode `abstrak aksesFitur()`.**<br>
- **Implementasikan class `Mahasiswa` dan `Dosen` yang mengimplementasikan metode abstrak tersebut.**<br>
- **Demonstrasikan dengan memanggil metode `aksesFitur()` dari objek yang diinstansiasi.**<br>
