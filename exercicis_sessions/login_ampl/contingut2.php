<?php
session_start();
if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit();
}
?>
<HTML>
<HEAD><TITLE>Contingut 2</TITLE></HEAD>
<BODY>
    <h3>Usuari: <?php echo $_SESSION['usuari']; ?> | <a href="logout.php">Tancar sessió (Desloguejar)</a></h3>
    <HR>
    <H2>Pagina de Contingut 2</H2>
    <A HREF="contingut1.php">Tornar a Contingut 1</A>
</BODY>
</HTML>