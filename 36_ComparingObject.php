<?php 

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
$student1 -> id = "245";
$student1 -> name = "Christoper";
$student1 -> value = 90;

$student2 = new Student();
$student2 -> id = "245";
$student2 -> name = "Christoper";
$student2 -> value = 90;

var_dump($student1 == $student2); // Membandingkan semua property.
var_dump($student1 === $student2); // Memastikan berada di object yang sama.

?>