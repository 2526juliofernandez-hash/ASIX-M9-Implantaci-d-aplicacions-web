<?php

$hora = date("H");

if ($hora >= 5 && $hora < 14) {
    
    echo "Bon dia";
} elseif ($hora >= 14 && $hora < 19) {

    echo "Bona tarda";

} else {
    echo "Bona nit";
}

echo "<br>";

echo "Hora del servidor: " . date("H:i");
?>