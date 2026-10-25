<?php
session_start();
if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit();
}
?>
<HTML>
<HEAD><TITLE>Pagina 2</TITLE></HEAD>
<BODY>
    <h3>Usuari connectat: <?php echo $_SESSION['usuari']; ?></h3>
    <HR>
    <H2>Pagina d'Informacio 2</H2>
    <p>Aquesta es la segona pagina d'informacio de la web.</p>
    <BR>
    <A HREF="pagina1.php">Tornar a la Pagina 1</A>
</BODY>
</HTML>