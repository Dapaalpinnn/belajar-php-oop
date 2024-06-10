<?php 

namespace Location;

class Location {
    public string $name;
    public string $description;
    public function setLocation($name, $description = "Good Morning"){
        echo "Welcome to $name , $description" . PHP_EOL;
    }

}

class City extends Location {

}

class Province extends Location {

}

class Country extends Location {

}


?>