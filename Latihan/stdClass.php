<?php 

// Latihan stdClass
class datadiri {
    public string $name;
    public string $addres;
    public string $country = "United States";
    public function __construct(string $name, string $addres) {
        $this->name = $name;
        $this->addres = $addres;
    }
}

echo "STD CLASS" . PHP_EOL;
$dataDiri = new DataDiri("Samuel Doe", "California");
var_dump($dataDiri);

echo "ARRAY" . PHP_EOL;
$arrayData = (array) $dataDiri; // Semua properti pada class data diri menjadi key pada array!
var_dump($arrayData);

?>

