<?php 
/* -------------------------------------------------------------------------- */
/*                               Abstract Class                               */
/* -------------------------------------------------------------------------- */


interface HelloWorld {
    public function sayHello($name, $message) :void;  
}

// Membuat class sekaligus objectnya secara langsung.
$helloWorld = new class implements HelloWorld {
    public function sayHello($name, $message = "Good Evening") :void {
        echo "Welcome to The Office $name, $message" . PHP_EOL;
    }
};

$helloWorld->sayHello("Luna", "Good Morning");

/* -------------------------------------------------------------------------- */
/*                               Anonymous Class                              */
/* -------------------------------------------------------------------------- */

interface sayGoodMorning {
    public function time() :void ;
}

$sayGoodMorning = new class ("Alexander Arnold","Good Morning") implements sayGoodMorning {
    public string $name;
    public string $message;
    public function __construct(string $name, string $message) {
        $this->name = $name;
        $this->message = $message;
    }
    public function time() :void {
        echo "$this->message $this->name , Welcome to Administrator" . PHP_EOL;
    }
};

$sayGoodMorning -> time();

?>