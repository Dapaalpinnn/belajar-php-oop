<?php 

class Person {
    public string $name;
    public string $addres;
    public string $country;
}

// Membuat Object Person.
$person = new Person(); 
// Mengakses Properties Person.
$person -> name = "Dafa Alvin";
$person -> addres = "Surabaya";
$person -> country = "Indonesia";
var_dump($person);

$person2 = new person();
$person2 -> name = "Budi Setiawan";
$person2 -> addres = "Jakarta";
$person2 -> country = "Indonesia";
var_dump($person2);

?>