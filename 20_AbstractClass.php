<?php 

require_once "Data/Location.php";

use Location\{City, Province, Country};

$myCity = new City();
$myCity -> setLocation("Surabaya");
var_dump($myCity);

$myProvince = new Province();
$myProvince -> setLocation("Jawa Timur");

$myCountry = new Country();
$myCountry -> setLocation("Indonesia");

?>