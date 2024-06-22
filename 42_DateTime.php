<?php 

date_default_timezone_set('Asia/Jakarta'); 

$dataTime = new DateTime();


/* -------------------------------------------------------------------------- */
/*                                DateInterval                                */
/* -------------------------------------------------------------------------- */

/* 

- Manipulasi waktu dan tanggal sebagian saja menggunakan dateInterval.
- Diawali dengan P (Period).
- https://www.php.net/manual/en/dateinterval.construct.php (Satuan Period)

*/

$dataTime -> add(new DateInterval("P2Y")); // Menambah Interval waktu

$timeInterval = new DateInterval("P2Y"); // Mengurangi Interval waktu
$timeInterval -> invert = true;
$dataTime -> add($timeInterval);

/* -------------------------------------------------------------------------- */
/*                  DateTimeZone (Mengubah timezone Datetime)                 */
/* -------------------------------------------------------------------------- */

// Mengubah zona waktu
$dataTime -> setTimezone(new DateTimeZone("Asia/Jakarta")); 

/* -------------------------------------------------------------------------- */
/*                               Format DataTime                              */
/* -------------------------------------------------------------------------- */

// Membuat datetime menjadi string
// https://www.php.net/manual/en/datetime.format.php

$string = $dataTime->format("Y-m-d H:i:s") ;
echo "Waktu belajar PHP saat ini: $string" . PHP_EOL;

/* -------------------------------------------------------------------------- */
/*                                ParseDateTime                               */
/* -------------------------------------------------------------------------- */

// Mengubah string menjadi datetime
// Menggunakan static function createFromFormat() dari class DataTime

$dataTime = DateTime::createFromFormat("Y-m-d H:i:s", "2020-11-28 09:32:11", new DateTimeZone("Asia/Jakarta"));
if ($dataTime) {
    var_dump($dataTime);
} else {
    echo "Check Your input dataTime";
}


?>