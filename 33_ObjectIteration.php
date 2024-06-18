<?php 

// Hanya bisa diakses oleh properti yang public!

class learnIteration implements IteratorAggregate {
    var string $var = "First";
    public string $public = "Second";
    protected string $protected = "Third";
    private string $private = "Forth";
    // Wajib mengembalikan object iterator.
    public function getIterator(): Traversable{
        $array = [
            "var" => $this->var,
            "public" => $this->public,
            "protected" => $this->protected,
            "private" => $this->private,
        ];

        return new ArrayIterator($array);
    }
}

$iteration = new LearnIteration();

// Jika kita melakukan perulangan foreach, maka php akan memanggil function getIterator(). 
foreach ($iteration as $property => $value){
    echo "$property : $value" . PHP_EOL;
}

?>