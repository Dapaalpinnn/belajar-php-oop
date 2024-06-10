<?php 

class MathHelper {
    static public string $name = "MathHelper";
}
echo MathHelper::$name . PHP_EOL;

// Mengubah Static
MathHelper::$name = "Alexander";
echo MathHelper::$name . PHP_EOL;

/* -------------------------------------------------------------------------- */
/*                               Static Function                              */
/* -------------------------------------------------------------------------- */

class Math {
    static public function sumAll (int ...$numbers) :int {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}

// Mengakses Static Function.
$total = Math::sumAll(10,20,30,40,50,60,70,80,90,100);
echo "Total keseluruhan: $total" . PHP_EOL;

?>