<?php 

require_once "Exception/Validation.php";
require_once "Exception/LoginRequest.php";
require_once "Exception/ValidationExeception.php";

$loginRequest = new LoginRequest();
$loginRequest -> username = "Dafa Alvin";
$loginRequest -> password = "1";
validationLoginRequest($loginRequest); // Tidak seperti ini!!!

echo "SUCCESSFULY LOGGIN!"

?>