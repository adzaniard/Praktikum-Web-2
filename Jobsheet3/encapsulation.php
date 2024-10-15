<?php
// Deklarasi kelas Person
class Person {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Person
    private $name;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai atribut nama
    public function getName() {
        return $this->name; //Mengembalikan nilai atribut nama
    }

    //Metode untuk mengatur nilai atribut nama
    public function setName($name) {
        $this->name = $name; //Menetapkan nilai parameter $nama ke atribut nama
    }
}

// Deklarasi kelas Student
class Student extends Person {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Student
    private $studentID;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($name, $studentID) {
        parent::__construct($name); //Memanggil konstruktor dari super class
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan nilai atribut studentID
    public function getStudentID() {
        return $this->studentID; //Mengembalikan nilai atribut studentID
    }

    //Metode untuk mengatur nilai atribut studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID; //Menetapkan nilai parameter $studentID ke atribut studentID
    }
}

// Pembuatan objek baru menggunakan parameter
$student1 = new Student("Mualani", "230102030");

//Memanggil metode getter untuk menampilkan data 
echo "<b>Data Student awal:</b><br>";
echo "Nama: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";

//Memanggil metode setter untuk mengubah nilai atribut
$student1->setName("Kachina");
$student1->setStudentID("230102045");

//Memanggil metode getter untuk menampilkan data 
echo "<br><b>Data Student yang sudah diperbarui menggunakan metode setter:</b><br>";
echo "Nama: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";
?>