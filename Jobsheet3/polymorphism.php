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
        return $this->name; //Mengembalikan nilai atribut nama
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
        return $this->studentID; //Mengembalikan nilai atribut studentID
    }

    // Metode untuk mendapatkan nilai atribut nama
    public function getName() {
        return "Student bernama " . $this->name; //Mengembalikan nilai atribut nama
    }
}

// Deklarasi kelas Teacher
class Teacher extends Person {
    // Deklarasi Atribut atau Properties untuk menyimpan data dari kelas Teacher
    public $teacherID;

    // Konstruktor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Metode untuk mendapatkan nilai atribut teacherID
    public function getTeacherID() {
        return $this->teacherID; //Mengembalikan nilai atribut teacherID
    }

    // Metode untuk mendapatkan nilai atribut nama
    public function getName() {
        return "Teacher bernama " . $this->name; //Mengembalikan nilai atribut nama
    }
}

// Pembuatan objek baru menggunakan parameter
$student1 = new Student("Kinich", "230203055");
//Memanggil metode getter untuk menampilkan data 
echo $student1->getName() . " dengan Student ID " . $student1->getStudentID() . ".<br>";

// Pembuatan objek baru menggunakan parameter
$teacher1 = new Teacher("Alhaitham", "123456789");
//Memanggil metode getter untuk menampilkan data 
echo $teacher1->getName() . " dengan Teacher ID " . $teacher1->getTeacherID() . ".";