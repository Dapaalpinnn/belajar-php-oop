<?php 

require_once "data/Mahasiswa.php";
require_once "data/Helper.php";

// Menggunakan Alias
use Data\One\Mahasiswa as Mahasiswa1;
use Data\One\Ayah as dataAyah;
use Data\One\Ibu as dataIbu;
use function Helper\Welcome;
use const Helper\APPLICATION as APP;

// Mengakses Namespace
$mahasiswa = new Mahasiswa1();
$mahasiswa -> nama = "Dafa Alvin";
$mahasiswa -> nim = 275271;
$mahasiswa -> jurusan = "Teknik Informatika";
$mahasiswa -> sayMahasiswa(null);

$ibu = new dataIbu();
$ibu -> nama = "Ratna Irawati";
$ibu -> sayIbu();

$ibu = new dataAyah();
$ibu -> nama = "John Smith";
$ibu -> sayAyah();

// Mengakses menggunakan alias
Welcome();
echo APP . PHP_EOL;



?>