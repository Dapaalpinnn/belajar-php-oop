<?php 

require_once "Exception/Validation.php";
require_once "Exception/LoginRequest.php";
require_once "Exception/ValidationExeception.php";

$login = new LoginRequest();
$login -> username = "Dafa";
$login -> password = "  ";

// Menggunakan Multiple Try Catch!
try {
    validationLoginRequest($login);
    echo "SUCCESSFULY LOGIN!" . PHP_EOL;
} catch (ValidationException | Exception $exception) { // Menggunakan atau (|) jika pesan error sama.
    echo "Error found: " . $exception->getMessage() . PHP_EOL;

    // Menambahkan Debuging (Tracking lokasi error)
    echo $exception->getTraceAsString() . PHP_EOL; // Bisa seperti ini
    var_dump($exception->getTrace()); // Atau ini

} finally {
    echo "Tetap dipanggil baik saat error maupun tidak!" . PHP_EOL;
}

// Menggunakan atau jika pesan error sama.

?>