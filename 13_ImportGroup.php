<?php 

require_once "data/Mahasiswa.php";
require_once "data/Helper.php";

// Melakukan Grouping Class
use Data\One\{Mahasiswa, Ibu, Ayah};
use function Helper\{Welcome, sayHello as hello};

$mahasiswa = new Mahasiswa();
$mahasiswa -> nama = "John Michael";
$mahasiswa -> nim = 23743746;
$mahasiswa -> jurusan = "Teknik Informatika";
$mahasiswa -> sayMahasiswa();

$ayah = new Ayah();
$ayah -> nama = "Irwan Setiawan";
$ayah -> sayAyah();

$ibu = new Ibu();
$ibu -> nama = "Ninik Irawati";
$ibu -> sayIbu();

// Memanggil function
Welcome();
hello();

?>