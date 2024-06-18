<?php 

require_once "24_Trait.php";
require_once "25_TraitOverriding.php";

use myTraits\{sayGoodBye, sayHello, hasName};

// Include trait lain.
trait All{
    use sayGoodBye, sayHello, hasName;
}
class helloPerson {
    use All;
}

$hello = new helloPerson();
$hello->sayGoodBye("Alexander Smith");
$hello->hello("Lunar");

?>