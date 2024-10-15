<?php
// Deklarasi kelas Person
class Person {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Person
    protected $name;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai atribut nama
    public function getName() {
        return $this->name; //Menetapkan nilai parameter $nama ke atribut nama
    }
}

// Deklarasi kelas Student
class Student extends Person {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Student
    public $studentID;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($name, $studentID) {
        parent::__construct($name); //Memanggil konstruktor dari super class
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan nilai atribut studentID
    public function getStudentID() {
        return $this->studentID; //Menetapkan nilai parameter $studentID ke atribut studentID
    }
}

// Pembuatan objek baru menggunakan parameter
$student1 = new Student("Kinich", "230203055");
//Memanggil metode getter untuk menampilkan data 
echo "Student " . $student1->getName() . " dengan Student ID " . $student1->getStudentID();