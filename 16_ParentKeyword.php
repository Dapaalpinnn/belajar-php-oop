<?php 

class learnShape {
    public function parentShape() :int {
        return 10;
    }
}

class childShape extends learnShape {
    // Overide function parentShape 
    public function parentShape() :int {
        return 4;
    }
    // Akses function parentShape
    public function getParentShape() :int {
        return parent::parentShape();
    }
}

// Mendapatkan value 
$value = new learnShape();
echo "Result dari class learnShape: " . $value->parentShape() . PHP_EOL;

$value = new childShape();
echo "Result dari class childShape: " . $value->parentShape()  . PHP_EOL;
echo "Akses function parent: " . $value->getParentShape() . PHP_EOL;

?>