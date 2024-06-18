<?php 

// Iterator menggunakan generator (More Simple >_-);

// Hanya bisa diakses oleh properti yang public!

class learnIteration implements IteratorAggregate {
    var string $var = "First";
    public string $public = "Second";
    protected string $protected = "Third";
    private string $private = "Forth";
    // Wajib mengembalikan object iterator.
    public function getIterator(): Traversable{
            yield "var" => $this->var;
            yield "public" => $this->public;
            yield "protected" => $this->protected;
            yield "private" => $this->private;
    }
}

$iteration = new LearnIteration();
// Jika kita melakukan perulangan foreach, maka php akan memanggil function getIterator(). 
foreach ($iteration as $property => $value){
    echo "$property : $value" . PHP_EOL;
}

?>