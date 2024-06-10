<?php 

require_once "data/Mahasiswa.php";
require_once "data/Helper.php";

// Membuat object dari namespace
$mahasiswa1 = new \Data\One\Mahasiswa();
$mahasiswa2 = new \Data\Two\Mahasiswa();

// Mengakses namespace dari file Helper
echo Helper\APPLICATION;
Helper\Welcome();

?>