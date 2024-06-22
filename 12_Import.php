<?php 

require_once "data/Mahasiswa.php";
require_once "data/Helper.php";

// Menggunakan Alias
use Data\One\Mahasiswa;
use Data\One\Ayah as DataAyah;
use Data\One\Ibu as DataIbu;
use function Helper\Welcome;
use function Helper\sayHello;
use const Helper\APPLICATION as APP;

// Mengakses Namespace
$mahasiswa = new Mahasiswa();
$mahasiswa -> nama = "Dafa Alvin";
$mahasiswa -> nim = 275271;
$mahasiswa -> jurusan = "Teknik Informatika";
$mahasiswa -> sayMahasiswa();

$ibu = new DataIbu();
$ibu -> nama = "Ratna Irawati";
$ibu -> sayIbu();

$ibu = new DataAyah();
$ibu -> nama = "John Smith";
$ibu -> sayAyah();

// Mengakses menggunakan alias
Welcome();
sayHello();
echo "Version: ". APP . PHP_EOL;



?>