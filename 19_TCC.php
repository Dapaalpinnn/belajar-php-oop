<?php 

/* -------------------------------------------------------------------------- */
/*                             Type Check & Casts                             */
/* -------------------------------------------------------------------------- */

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

 

 function HelloProgrammer(Programmer $name){
    if($name instanceof Programmer){
        echo "Good Morning Programmer {$name -> name}" . PHP_EOL;
    } elseif ($name instanceof FrontendProgrammer){
        echo "Good Morning Frontend Programmer {$name -> name}" . PHP_EOL;
    } elseif ($name instanceof BackendProgrammer){
        echo "Good Morning Backend Programmer {$name -> name}" . PHP_EOL;
    }
 }

 HelloProgrammer(new Programmer("Budi"));
 HelloProgrammer(new FrontendProgrammer("Arif"));
 HelloProgrammer(new BackendProgrammer("Udin"));

?>