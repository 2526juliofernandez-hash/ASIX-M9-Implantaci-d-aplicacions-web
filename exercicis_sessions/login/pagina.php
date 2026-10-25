<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit();
}
?>
<HTML>
<HEAD>
    <TITLE>Pagina d'Informacio 1</TITLE>
</HEAD>
<BODY>
    <H3>Usuari connectat: <?php echo $_SESSION['usuari']; ?></H3>
    <HR>
    <H2>Pagina d'Informacio 1</H2>
    <p>Benvingut a la primera pagina de contingut protegit per sessions.</p>
    <BR>
    <A HREF="pagina2.php">Anar a la Pagina 2</A>
</BODY>
</HTML>