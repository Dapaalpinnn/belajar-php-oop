<?php 

// Menempel pada class, biasanya digunakan sebagai utility!

class MathHelper {
    static public string $name = "MathHelper";
}
echo MathHelper::$name . PHP_EOL; // Mengakses statis menggunakan class

// Mengubah Static
MathHelper::$name = "Alexander";
echo "Ubah value static: " . MathHelper::$name . PHP_EOL;

/* -------------------------------------------------------------------------- */
/*                               Static Function                              */
/* -------------------------------------------------------------------------- */

class Math {
    static public function sumAll (int ...$numbers) :int {
        $total = 1;
        foreach ($numbers as $number) {
            $total *= $number;
        }
        return $total;
    }
}

// Mengakses Static Function.
$total = Math::sumAll(11,23,43,8,45,32,10);
echo "Total keseluruhan: $total" . PHP_EOL;

?>