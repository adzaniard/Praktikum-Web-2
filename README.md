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

### TUGAS:
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
  >Mendeklarasikan class baru bernama Mahasiswa yang akan digunakan untuk membuat objek yang mewakili mahasiswa. Kemudian Mendeklarasikan atribut nama, nim, dan jurusan untuk menyimpan data yang berkaitan dengan atribut tersebut.
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
  >Membuat metode tampilkanData() untuk menampilkan informasi dengan mengakses nilai atribut menggunakan $this.
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
  ```
- **Instansiasi objek dari class `Mahasiswa` dan tampilkan data mahasiswa tersebut.**<br>
  >Membuat objek baru dari kelas Mahasiswa kelas Mahasiswa menggunakan kata kunci new. Objek tersebut disimpan dalam variabel $mhs1. Kemudian menggunakan metode tampilData() dari kelas Mahasiswa untuk menampilkan informasi dengan cara memanggil metode melalui objek $mhs1.
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
- **Hasil Output:**<br>

**2. Encapsulation**<br>
Enkapsulasi adalah proses penyembunyian data suatu objek dan hanya memperbolehkan akses atau modifikasi data melalui metode khusus (getter dan setter). Hal ini bertujuan untuk melindungi data dari manipulasi langsung dan memastikan bahwa perubahan pada data dilakukan dengan cara yang terkontrol.
- **Ubah atribut dalam class `Mahasiswa` menjadi `private`**<br>
  >Menetapkan atribut sebagai `private` dimana atribut hanya dapat diakses dan diubah melalui metode di dalam kelas tersebut.
  ```
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
  ```
- **Buat metode `getter` dan `setter` untuk atribut `nama`, `nim`, dan `jurusan`.**<br>
  Metode `getter` berfungsi untuk mengambil nilai dari atribut, sedangkan metode `setter` berfungsi untuk menetapkan atau mengubah nilai dari atribut.
  >Membuat metode `getter` untuk mengakses nilai dari atribut private yang telah diinisialisasi di konstruktor. Membuat metode `setter` untuk menetapkan atau mengubah nilai atribut private.
  ```
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
  ```
- **Demonstrasikan akses ke atribut menggunakan metode `getter` dan `setter`.**<br>
  >Membuat objek baru dari kelas `Mahasiswa` menggunakan kata kunci new. Objek tersebut disimpan dalam variabel `$mhs1`. Kemudian menggunakan metode `getter` dan `setter` dari kelas Mahasiswa untuk menampilkan informasi dengan cara memanggil metode melalui objek `$mhs1`.
  ```
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
  ```
- **Hasil Output:**<br>

**3. Inheritance**<br>
Inheritance (pewarisan) memungkinkan suatu kelas untuk mewarisi properti (atribut) dan metode dari kelas lain menggunakan kata kunci extend di kelas turunan (sub class). Penggunaan inheritance dapat membuat kelas baru yang memiliki atribut dan metode dari kelas yang sudah ada (super class), serta menambahkan atau memodifikasi atribut dan metode tersebut.
- **Buat class `Pengguna` dengan atribut `nama` dan metode `getNama()`.**<br>
  >Mendeklarasikan class baru bernama `Pengguna` yang akan digunakan untuk membuat objek yang mewakili pengguna. Kemudian Mendeklarasikan atribut `nama` untuk menyimpan data yang berkaitan dengan atribut tersebut, serta mengakses nilai dari atribut protected yang telah diinisialisasi di konstruktor.
  ```
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
  ```
- **Buat class `Dosen` yang mewarisi class `Pengguna` dan tambahkan atribut `mataKuliah`**<br>
  >Mendeklarasikan class baru bernama `Dosen` yang mewarisi class `Pengguna` dan akan digunakan untuk membuat objek yang mewakili dosen. Kemudian Mendeklarasikan atribut `mataKuliah` untuk menyimpan data yang berkaitan dengan atribut tersebut.
  ```
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
  ```
- **Instansiasi objek dari class `Dosen` dan tampilkan data dosen.**<br>
  >Membuat objek baru dari kelas `Dosen` menggunakan kata kunci new. Objek tersebut disimpan dalam variabel `$dsn1`. Konstruktor kelas Dosen akan memanggil konstruktor dari kelas induk Pengguna untuk menginisialisasi atribut `$nama` dari kelas induk. Kemudian menggunakan metode `getter` dari kelas Dosen untuk menampilkan informasi dengan cara memanggil metode melalui objek `$dsn1`.
  ```
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
  ```
- **Hasil Output:**<br>

**4. Polymorphism**<br>
Polymorphism (polimorfisme) memungkinkan objek dari berbagai kelas untuk diakses melalui antarmuka yang sama, tetapi masing-masing objek tersebut dapat memberikan implementasi yang berbeda pada metode yang dipanggil. Polimorfisme memberikan fleksibilitas dalam kode, karena metode yang sama dapat memiliki perilaku yang berbeda tergantung pada objek yang menggunakannya.
- **Buat class `Pengguna` dengan metode `aksesFitur()`.**<br>
  Mendeklarasikan class baru bernama `Pengguna `yang akan digunakan untuk membuat objek yang mewakili pengguna. Kemudian Mendeklarasikan atribut `nama` menyimpan data yang berkaitan dengan atribut tersebut. Membuat metode `aksesFitur()` untuk mengakses nilai dari atribut protected yang telah diinisialisasi di konstruktor kelas induk sehingga metode ini dapat digunakan oleh setiap kelas yang mewarisi.
  ```
  <?php
  // Deklarasi kelas Pengguna
  class Pengguna {
      // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Pengguna
      protected $nama;
  
      // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
      public function __construct($nama) {
          $this->nama = $nama;
      }
  
      // Metode untuk menampilkan informasi akses fitur dengan mengembalikan nilai dari atribut
      public function aksesFitur() {
          return "Pengguna " . $this->nama . " mendapatkan akses fitur Guest.";
      }
  }
  ```
- **Implementasikan `aksesFitur()` dengan cara berbeda di class `Dosen` dan `Mahasiswa`.**<br>
  >Kelas `Dosen` mengganti (override) metode `aksesFitur()` dari kelas induk, memberikan akses fitur khusus untuk Dosen (Pegawai) dengan informasi tambahan tentang mata kuliah yang diampu. Sedangkan kelas `Mahasiswa` mengganti (override) metode `aksesFitur()`, memberikan akses fitur khusus untuk mahasiswa dengan informasi tambahan tentang NIM dan jurusan.
  ```
  <?php
  // Deklarasi kelas Pengguna
  class Pengguna {
      // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Pengguna
      protected $nama;
  
      // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
      public function __construct($nama) {
          $this->nama = $nama;
      }
  
      // Metode untuk menampilkan informasi akses fitur dengan mengembalikan nilai dari atribut
      public function aksesFitur() {
          return "Pengguna " . $this->nama . " mendapatkan akses fitur Guest.";
      }
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
  ```
- **Instansiasi objek dari class `Dosen` dan `Mahasiswa`, lalu panggil metode `aksesFitur()`.**<br>
  >Membuat objek baru dari kelas `Dosen` dan `Mahasiswa` menggunakan kata kunci new. Kemudian memanngil metode `aksesFitur()` dari kedua kelas tersebut yang memiliki tindakan yang berbeda untuk menampilkan informasi dengan cara memanggil metode melalui objek.
  ```
  <?php
  // Deklarasi kelas Pengguna
  class Pengguna {
      // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Pengguna
      protected $nama;
  
      // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
      public function __construct($nama) {
          $this->nama = $nama;
      }
  
      // Metode untuk menampilkan informasi akses fitur dengan mengembalikan nilai dari atribut
      public function aksesFitur() {
          return "Pengguna " . $this->nama . " mendapatkan akses fitur Guest.";
      }
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
  ```
- **Hasil Output:**<br>

**5. Abstraction**<br>
Abstraction (abstraksi) berfungsi untuk menyembunyikan detail implementasi yang kompleks dari pengguna, dan hanya menampilkan fungsionalitas atau informasi yang diperlukan. Hal ini membantu memudahkan penggunaan dan memelihara kode, karena hanya berinteraksi dengan metode atau fitur yang relevan.
- **Buat class `abstrak Pengguna` dengan metode `abstrak aksesFitur()`.**<br>
  > Mendeklarasikan absctract class baru bernama `Pengguna `yang akan digunakan sebagai kelas dasar yang harus diwariskan oleh kelas lain. Kemudian Mendeklarasikan atribut `nama` menyimpan data yang berkaitan dengan atribut tersebut. Membuat metode abstrak `aksesFitur()` tanpa implementasi di kelas `Pengguna` sehingga harus diimplementasikan di kelas turunan.
  ```
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
  ```
- **Implementasikan class `Mahasiswa` dan `Dosen` yang mengimplementasikan metode abstrak tersebut.**<br>
  >Mendeklarasikan class baru bernama `Dosen` dan `Mahasiswa` yang mewarisi kelas `Pengguna` dan memperluasnya dengan atribut baru. Kemudian mengimplementasikan metode `aksesFitur()` ke kelas masing-masing yang memiliki tindakan berbeda dalam menampilkan informasi.
  ```
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
  ```
- **Demonstrasikan dengan memanggil metode `aksesFitur()` dari objek yang diinstansiasi.**<br>
  >Membuat objek baru dari kelas `Dosen` dan `Mahasiswa` menggunakan kata kunci new. Kemudian memanngil metode aksesFitur() dari kedua kelas tersebut yang memiliki tindakan yang berbeda untuk menampilkan informasi dengan cara memanggil metode melalui objek.
  ```
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
  ```
- **Hasil Output:**<br>

