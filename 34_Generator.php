<?php 

// Membuat iterator secara otomatis menggunakan kata kunci yield.

// Menggunakan array
function getGenap(int $maxValue){
    $array = [];
    for ($i = 1; $i <= $maxValue; $i++) {
        if ($i % 2 == 0){
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

foreach (getGenap(100) as $value) {
    echo "Genap: $value" . PHP_EOL;
}



// Menggunakan generator 
function getGanjil(int $maxValue) :iterator {
    for ($i=1; $i <= $maxValue ; $i++) { 
        if ($i % 2 == 0) {{
            yield $i;
        }}
    }
}

$ganjil = getGanjil(50);
foreach ($ganjil as $value) {
    echo "Ganjil: $value" . PHP_EOL;
}

// Latihan generator ada pada folder Latihan >_-

?>