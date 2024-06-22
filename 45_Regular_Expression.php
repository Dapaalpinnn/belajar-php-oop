<?php 

// Digunakan untuk melakukan pencarian di string menggunakan pola tertentu (Lebih advance). 
// https://www.php.net/manual/en/pcre.pattern.php.

$matches = [];
$result = (bool)preg_match_all("/afa|vin|rudi/i", "Muhammad Dafa Alvin", $matches);
var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "Dasar lu anjing, bangsat!");
var_dump($result);

$result = preg_split("/[\s,-]/", "Halo Samuel,Selamat-datang");
var_dump($result);

?>