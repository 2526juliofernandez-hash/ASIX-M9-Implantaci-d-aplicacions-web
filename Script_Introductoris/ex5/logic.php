<?php

if (isset($_GET["preu"]) && isset($_GET["iva"])) {

    $preu = $_GET["preu"];

    $iva = $_GET["iva"];

    if ($iva == 4) {
        $resultat = $preu * 1.04;

    } elseif ($iva == 10) {

        $resultat = $preu * 1.10;

    } elseif ($iva == 21) {
        $resultat = $preu * 1.21;
    }

    echo "El preu amb IVA és: " . number_format($resultat, 2) . "€";

    echo "<br><br>";

    echo "<form action='index.html' method='get'><button>Tornar</button></form>";

} else {

    echo "No s'ha introduït el preu o l'IVA.";

    echo "<br><br>";
    
    echo "<form action='index.html' method='get'><button>Tornar</button></form>";
}
?>