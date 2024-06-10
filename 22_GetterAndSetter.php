<?php 

/* -------------------------------------------------------------------------- */
/*                                Encapsulation                               */
/* -------------------------------------------------------------------------- */

// Artinya memastikan data sensitif sebuah object tersembunyi dari akses luar. Tujuannya agar object tetap baik dan valid.  


/* -------------------------------------------------------------------------- */
/*                              Getter and Setter                             */
/* -------------------------------------------------------------------------- */

// Getter => Function yang dibuat untuk mengambil data field.
// Setter => Function untuk mengubah data field.

class Category {
    private string $name;
    private bool $expensive;
    public function getName() : string {
        return $this->name;
    }
    public function setName(string $name) : void {
        // Menambahkan validasi.
        if(trim($name) != ""){
            $this->name = $name;
        }
    }
    public function isExpensive() : bool {
        return $this->expensive;
    }
    public function setExpensive(bool $expensive) : void {
        $this->expensive = $expensive;
    }
}

$category = new Category();
$category -> setName("MacBook");
$category -> setExpensive(true);

$category -> setName("Macbook Pro");
// Mengakses.
echo "Name: {$category->getName()}" . PHP_EOL;
echo "Expensive: {$category->isExpensive()}"   . PHP_EOL;

?>