<?php 

// Reflection adalah membaca kode saat aplikasi berjalan (Biasanya digunakan saat membuat framework)
// https://www.php.net/manual/en/book.reflection.php.


require_once "exception/LoginRequest.php";
require_once "exception/ValidationExeception.php";

class ValidationUtil {
    // Manual
    public static function validate(LoginRequest $request){
        if(!isset($request->username)){
            throw new ValidationException("Username is null");
        } if(!isset($request->password)){
            throw new ValidationException("Password is null");
        }
    }
    // Reflection 
    static function ValidateReflection($request){
        $reflection = new ReflectionClass($request);
        $properties = $reflection -> getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if(!$property -> isInitialized($request)){
                throw new ValidationException("$property -> name is not set" );
            } else if (is_null($property -> getValue($request))){
                throw new ValidationException("$property -> name is null");
            }
        }
    }
}

/* -------------------------------------------------------------------------- */
/*                        Tanpa menggunakan reflection                        */
/* -------------------------------------------------------------------------- */

$request = new LoginRequest();
$request -> username = "null";
$request -> password = "null";
// ValidationUtil::validate($request);

/* -------------------------------------------------------------------------- */
/*                           Menggunakan Reflection                           */
/* -------------------------------------------------------------------------- */

ValidationUtil::ValidateReflection($request);

class RegisterLoginRequest {
    public string $name;
    public string $addres;
    public string $email;
}

$register = new RegisterLoginRequest();
$register -> name = "Ahmad";
$register -> addres = "Surabaya";
$register -> email = "amd@gmail.com";

ValidationUtil::ValidateReflection($register);

?>