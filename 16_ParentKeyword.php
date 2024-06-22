<?php 

class learnShape {
    public function parentShape():int{
        return 10;
    }
}

class childShape extends learnShape {
    // Overide function parentShape 
    public function parentShape():int{
        return 4;
    }
    // Akses function parentShape
    public function getParentShape():int{
        return parent::parentShape();
    }
}

// Mendapatkan value 
$value = new learnShape();
echo "Result from class learnShape: " . $value->parentShape() . PHP_EOL;

$value = new childShape();
echo "Result from class childShape: " . $value->parentShape()  . PHP_EOL;
echo "Acces parent function at childShape class: " . $value->getParentShape() . PHP_EOL;

?>