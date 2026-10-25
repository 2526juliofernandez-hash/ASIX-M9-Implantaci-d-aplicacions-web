<?php
session_start();

$q1 = isset($_SESSION['prod1']) ? $_SESSION['prod1'] : 0;
$q2 = isset($_SESSION['prod2']) ? $_SESSION['prod2'] : 0;

$preu1 = 39;
$preu2 = 25;

$total1 = $q1 * $preu1;
$total2 = $q2 * $preu2;
$total_final = $total1 + $total2;
?>
<HTML>
<HEAD>
    <TITLE>Resum de Compra</TITLE>
</HEAD>
<BODY>
    <H3>Resum de la teva cistella</H3>
    <p>Vi Les Terrasses (<?php echo $preu1; ?> €) x <?php echo $q1; ?> = <?php echo $total1; ?> €</p>
    <p>Vermut Casolà (<?php echo $preu2; ?> €) x <?php echo $q2; ?> = <?php echo $total2; ?> €</p>
    <HR>
    <H3>Total a pagar: <?php echo $total_final; ?> €</H3>
    <BR>
    <FORM ACTION="confirmar.php" METHOD="POST">
        <INPUT TYPE="submit" VALUE="Confirmar compra i pagar">
    </FORM>
    <BR>
    <A HREF="index.html">Continuar comprant</A>
</BODY>
</HTML>