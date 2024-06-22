<?php 

class Programmer {
    public string $name;
    public function __construct(string $name){
        $this -> name = $name;
    }
}

class BackendProgrammer extends Programmer{
    
}

class FrontendProgrammer extends Programmer{
    
}

 /* -------------------------------------------------------------------------- */
 /*                                Polymorphism                                */
 /* -------------------------------------------------------------------------- */

// Polymorphism => Kemampuan sebuah object berubah bentuk menjadi bentuk lain.

class Company {
    public Programmer $programmer;
}

$company = new Company();
$company -> programmer = new Programmer("Programmer");
var_dump($company);

$company -> programmer = new FrontendProgrammer("Frontend Programmer");
var_dump($company);

$company -> programmer = new BackendProgrammer("Backend Programmer");
var_dump($company);


/* -------------------------------------------------------------------------- */
/*                       Function Argument Polymorphism                       */
/* -------------------------------------------------------------------------- */

function sayHelloProgrammer(programmer $programmer){
    echo "Hello Programmer {$programmer -> name}" . PHP_EOL;
}

// Kita bisa menggunakan turunannya.
sayHelloProgrammer(new programmer("John"));
sayHelloProgrammer(new FrontendProgrammer("Michael"));
sayHelloProgrammer(new BackendProgrammer("Samuel"));

?>