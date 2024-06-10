<?php 

namespace Data;

class Shape {
    public function getCorner() : int {
        return -1;
    }
}

class Rectangle extends Shape {
    // Overriding.
    public function getCorner() : int {
        return 4;
    }
    // Mengakses value parent.
    public function getParentCorner() : int {
        return parent::getCorner();
    }
}

?>