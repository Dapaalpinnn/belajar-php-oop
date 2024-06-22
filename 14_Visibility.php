<?php 

/* -------------------------------------------------------------------------- */
/*                   Visibility (Public, Protected, Private)                  */
/* -------------------------------------------------------------------------- */

class Product {
    protected string $name;
    protected int $price;
    public function __construct (string $name, int $price){
        $this -> name = $name;
        $this -> price = $price;
    }
    // Membuat function untuk mengambil data private.
    public function getName(): string {
        return $this -> name;
    }
    public function getPrice(): int {
        return $this -> price;
    }
}

$myProduct = new Product("Apple", 15000);
// Mengakses dengan menggunakan function yang berada di class yang sama.
echo "Product: " . $myProduct -> getName() . PHP_EOL;
echo "Price: " . $myProduct -> getPrice() . PHP_EOL;


class ProductDummy extends Product {
    public function infoProduk(){
        echo "Nama Produk: $this->name" . PHP_EOL;
        echo "Harga Produk: $this->price" . PHP_EOL;
    }
}

$myInfo = new ProductDummy("Cherry",3000);
$myInfo -> infoProduk();

?>