<?php 

// Menyalin semua properties di object awal ke object baru.

class Student {
    public string $id;
    public string $name;
    public int $value;
    private string $desciption;
    public function setDescription(string $desciption = "Welcome") :void {
        $this->desciption = $desciption;
    }
    // Menghapus properties yang tidak ingin digunakan menggunakan function.
    public function __clone(){
        unset($this->desciption);
    }
}

$student1 = new Student();
$student1 -> id = "536";
$student1 -> name = "John Doe";
$student1 -> value = 100;
$student1 -> setDescription();

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);


?>