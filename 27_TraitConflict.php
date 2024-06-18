<?php 

trait A {
    public function doA() :void {
        echo "Ini function A pada trait A" . PHP_EOL;
    }
    public  function doB() :void {
        echo "Ini function B pada trait A" . PHP_EOL;    
    }
}
trait B {
    public function doA() :void {
        echo "My Trait B Function do A" . PHP_EOL;
    }
    public  function doB() :void {
        echo "My Trait B Function do B" . PHP_EOL;    
    }
}

class sample {
    use A,B{
        // Untuk function doA, memakai trait A.
        A::doA insteadOf B;
        // Untuk function doB, memakai trait B.
        B::doB insteadOf A;
    }

}

$mySample = new Sample();
$mySample->doA();
$mySample->doB();

?>