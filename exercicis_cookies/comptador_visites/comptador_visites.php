<?php
$visites = 1;
$comprat = "no";

if (isset($_COOKIE['visites'])) {
    $visites = $_COOKIE['visites'];
}

if (isset($_COOKIE['comprat'])) {
    $comprat = $_COOKIE['comprat'];
}

if ($comprat == "no") {
    $visites = $visites + 1;
}

setcookie("visites", $visites, time() + (86400 * 30));
setcookie("comprat", $comprat, time() + (86400 * 30));
?>
<HTML>
<HEAD>
    <TITLE>Comptador de Visites i Ofertes</TITLE>
</HEAD>
<BODY>
    <H3>Benvingut a la nostra botiga!</H3>
    <BR>
    
    <?php
    echo "Quantitat d'accés a aquesta pàgina: " . $visites . "<BR><BR>";

    if ($comprat == "no") {
        if ($visites >= 10) {
            echo "<p style='color:red;'><strong>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</strong></p>";
        } elseif ($visites >= 5) {
            echo "<p style='color:blue;'><strong>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</strong></p>";
        }
    } else {
        echo "<p style='color:green;'><strong>Ja has realitzat una compra prèvia!</strong></p>";
    }
    ?>

    <BR>
    <FORM ACTION="comprar.php" METHOD="POST">
        Codi de descompte: <INPUT TYPE="text" NAME="codi">
        <BR><BR>
        <INPUT TYPE="submit" VALUE="Botó de compra">
    </FORM>
</BODY>
</HTML>