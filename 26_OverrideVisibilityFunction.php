<?php 

/* -------------------------------------------------------------------------- */
/*                         Overide Visibility Function                        */
/* -------------------------------------------------------------------------- */

require_once "24_Trait.php";

use myTraits\{sayGoodBye, sayHello, hasName};

class userPerson {
    // Mengubah visibility function menggunakan kata kunci as
    use sayGoodBye, sayHello, hasName {
        hello as private;
        sayGoodBye as private;
        hasName as public;
    }
}

?>