<?php
setcookie("comprat", "si", time() + (86400 * 30));
$codi = isset($_POST['codi']) ? $_POST['codi'] : "";
?>
<HTML>
<HEAD>
    <TITLE>Compra realitzada</TITLE>
</HEAD>
<BODY>
    <H3>Gràcies per la seva compra!</H3>
    <?php
    if ($codi != "") {
        echo "Has utilitzat el codi: " . $codi . "<BR>";
    }
    ?>
    <BR>
    <A HREF="comptador_visites.php">Tornar a la pàgina principal</A>
</BODY>
</HTML>