<?php
$majoredat = isset($_COOKIE['majoredat']) ? $_COOKIE['majoredat'] : "no";
$idioma = isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : "catala";
$moneda = isset($_COOKIE['moneda']) ? $_COOKIE['moneda'] : "euros";

if ($moneda == "lliures") {
    $simbol = "£";
    $preu1 = 34;
    $preu2 = 22;
} elseif ($moneda == "dolars") {
    $simbol = "$";
    $preu1 = 42;
    $preu2 = 28;
} else {
    $simbol = "€";
    $preu1 = 39;
    $preu2 = 25;
}
?>
<HTML>
<HEAD>
    <TITLE>Bodega</TITLE>
</HEAD>
<BODY>
    <?php
    if ($majoredat != "si") {
        if ($idioma == "espanyol") {
            echo "<H3 style='color:red;'>No te podemos vender alcohol si eres menor de edad.</H3>";
        } elseif ($idioma == "angles") {
            echo "<H3 style='color:red;'>We cannot sell you alcohol if you are underage.</H3>";
        } else {
            echo "<H3 style='color:red;'>No et podem vendre alcohol si ets menor d'edat.</H3>";
        }
    } else {
        if ($idioma == "espanyol") {
            echo "<H3>Catálogo de la Bodega</H3>";
            echo "Te ofrecemos el vino “Les Terrasses” a un precio de " . $preu1 . " " . $simbol . "<BR>";
            echo "También tenemos el producto “Vermut Casolà” a un precio de " . $preu2 . " " . $simbol . "<BR>";
        } elseif ($idioma == "angles") {
            echo "<H3>Winery Catalog</H3>";
            echo "We offer you the wine “Les Terrasses” at a price of " . $preu1 . " " . $simbol . "<BR>";
            echo "We also have the product “Vermut Casolà” at a price of " . $preu2 . " " . $simbol . "<BR>";
        } else {
            echo "<H3>Catàleg de la Bodega</H3>";
            echo "T’oferim el vi “Les Terrasses” a un preu de " . $preu1 . " " . $simbol . "<BR>";
            echo "També tenim el producte “Vermut Casolà” a un preu de " . $preu2 . " " . $simbol . "<BR>";
        }
    }
    ?>
    <BR>
    <A HREF="index.php">Modificar preferències</A>
</BODY>
</HTML>