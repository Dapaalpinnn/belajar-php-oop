<?php 

// Sangat berguna ketika ingin melakukan konversi dari tipe data array ke object secara otomatis!

// Konversi array ke object
$array = [
    "firstname" => "Dafa", 
    "middlename" => "Alvin", 
    "lastname" => "Zuhdi", 
];

// Menggunakan stdclass
$object = (object) $array;
var_dump($object);

echo json_encode($object) . PHP_EOL;

echo "Nama depan : $object->firstname" . PHP_EOL;
echo "Nama tengah : $object->middlename" . PHP_EOL;
echo "Nama belakang : $object->lastname" . PHP_EOL;

// Mengembalikan ke bentuk array
$otherArray = (array) $object; 
var_dump($otherArray);

// Latihan stdClass di folder Latihan.

?>


