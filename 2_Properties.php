<?php 

require_once "data/Person.php";

// Membuat Object Person.
$person = new Person(); 
// Menambah Properties Person.
$person -> name = "Dafa Alvin";
$person -> addres = "Surabaya";
$person -> country = "Indonesia";
var_dump($person);


// Membuat Object Person2.
$person2 = new person();
// Menambah Properties Person2.
$person2 -> name = "Budi Setiawan";
$person2 -> addres = "Jakarta";
$person2 -> country = "Indonesia";
var_dump($person2);

?>