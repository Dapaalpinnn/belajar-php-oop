<?php 

/* -------------------------------------------------------------------------- */
/*     Properties Type Declaration, Default Value dan Nullable Properties     */
/* -------------------------------------------------------------------------- */

class PropertyType{
    // Type Data Declaration, setelah kata kunci var.
    var string $nama;
    var int $nim;
    var string $programStudi;
    // Nullable properties "?", artinya properties tersebut bisa null
    var ?string $alamat; 
    // Default Value
    var string $perguruanTinggi = "Universitas Negeri Surabaya";
}

$dataMahasiswa01 = new PropertyType();
$dataMahasiswa01 -> nama = "Budi Nugraha";
$dataMahasiswa01 -> nim = 23091378467;
$dataMahasiswa01 -> programStudi = "Teknik Lingkungan";
$dataMahasiswa01 -> alamat = null;
var_dump($dataMahasiswa01)

?>