<?php
// Deklarasi kelas abstrak Course
abstract class Course {
    // Metode abstrak yang akan diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}

// Deklarasi kelas OnlineCourse mewarisi kelas Course
class OnlineCourse extends Course{
    // Metode yang diimplementasikan dari super class
    public function getCourseDetails() {
        return "Kelas online diadakan pada malam hari melalui google meet.";
    }
}

// Deklarasi kelas OfflineCourse mewarisi kelas Course
class OfflineCourse extends Course{
    // Metode yang diimplementasikan dari super class
    public function getCourseDetails() {
        return "Kelas offline diadakan pada pagi hari.";
    }
}

// Pembuatan objek baru
$online = new OnlineCourse();
//Memanggil metode untuk menampilkan data
echo $online->getCourseDetails() . " <br>";

// Pembuatan objek baru
$offline = new OfflineCourse();
//Memanggil metode untuk menampilkan data
echo $offline->getCourseDetails();
?>