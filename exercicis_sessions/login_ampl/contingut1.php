<?php
session_start();
if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit();
}
?>
<HTML>
<HEAD><TITLE>Contingut 1</TITLE></HEAD>
<BODY>
    <h3>Usuari: <?php echo $_SESSION['usuari']; ?> | <a href="logout.php">Tancar sessió (Desloguejar)</a></h3>
    <HR>
    <H2>Pàgina de Contingut 1</H2>
    <A HREF="contingut2.php">Anar a Contingut 2</A>
</BODY>
</HTML>