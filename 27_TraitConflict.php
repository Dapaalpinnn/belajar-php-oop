<?php 

trait A {
    public function doA() :void {
        echo "a" . PHP_EOL;
    }
    public  function doB() :void {
        echo "b" . PHP_EOL;    
    }
}
trait B {
    public function doA() :void {
        echo "My Trait Function do A" . PHP_EOL;
    }
    public  function doB() :void {
        echo "My Trait Function do B" . PHP_EOL;    
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