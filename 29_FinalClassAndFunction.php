<?php 

/* -------------------------------------------------------------------------- */
/*                          Final Class and Function                          */
/* -------------------------------------------------------------------------- */

class SosialMedia {
    public string $name;
}

// Membuat Final Class
final class Facebook extends SosialMedia {
//Membuat Final Function (Tidak akan bisa di overide lagi.)
final public function Login(string $username, string $password) :bool {
    return true;
}
}

// ERRORRRRRRR!!!
// class FakeFacebook extends Facebook {
// final public function Login(string $username, string $password) : bool {
//     return false;
// }
// }

?>