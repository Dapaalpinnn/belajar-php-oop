<?php 

// Magic function biasanya diawali dengan __

class theStudent {
    public string $name;
    public string $id;
    public int $value;
    // Konversi string
    public function __toString(){
        return "Nama siswa: $this->name, ID Siswa: $this->id, Nilai: $this->value" . PHP_EOL;
    }
    // Invoke
    public function __invoke(...$arguments){
        $join = join("," , $arguments); 
        echo "Invoke students with arguments: $join" . PHP_EOL;
    }
    // Debug info
    public function __debugInfo() :array {
        // BIsa menambahkan detail informasi!
        return [
            "Name" => $this->name,
            "Id" => $this->id,
            "Value" => $this->value,
            "Activity" => "Belajar PHP OOP",
            "Version" => "1.0.7",
            "Date" => "20 June 2024"
        ];
    }
}

/* -------------------------------------------------------------------------- */
/*                                  To String                                 */
/* -------------------------------------------------------------------------- */

$siswa = new theStudent();
$siswa->name = "Ahmad Kurniawan";
$siswa->id = "98367";
$siswa->value = 78328;

echo "TO STRING" . PHP_EOL;
// Konversi.
$string = (string) $siswa;
echo $string . PHP_EOL;

/* -------------------------------------------------------------------------- */
/*                                   Invoke                                   */
/* -------------------------------------------------------------------------- */

echo "INVOKE" . PHP_EOL;
// Variable akan dianggap sebagai function.
$siswa("Samuel", 100, true);

/* -------------------------------------------------------------------------- */
/*                                 Debug Info                                 */
/* -------------------------------------------------------------------------- */

echo "DEBUG INFO" . PHP_EOL;
print_r($siswa);
?>