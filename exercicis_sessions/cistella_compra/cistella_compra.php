<?php
session_start();

if (isset($_POST['accio'])) {
    $q1 = intval($_POST['quantitat1']);
    $q2 = intval($_POST['quantitat2']);

    if (!isset($_SESSION['prod1'])) { $_SESSION['prod1'] = 0; }
    if (!isset($_SESSION['prod2'])) { $_SESSION['prod2'] = 0; }

    $_SESSION['prod1'] += $q1;
    $_SESSION['prod2'] += $q2;
}
?>
<HTML>
<HEAD>
    <TITLE>Cistella actualitzada</TITLE>
</HEAD>
<BODY>
    <H3>Producte afegit correctament a la cistella!</H3>
    <BR>
    <A HREF="index.html">Tornar a la botiga</A> | 
    <A HREF="resum.php">Veure resum de la compra</A>
</BODY>
</HTML>