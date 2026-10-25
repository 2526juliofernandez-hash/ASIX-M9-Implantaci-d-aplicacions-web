<?php
session_start();
unset($_SESSION['prod1']);
unset($_SESSION['prod2']);
?>
<HTML>
<HEAD>
    <TITLE>Compra confirmada</TITLE>
</HEAD>
<BODY>
    <H2 style="color:green;">Gracies per la seva compra! El pagament s'ha realitzat amb exit.</H2>
    <p>La cistella s'ha buidat.</p>
    <BR>
    <A HREF="index.html">Tornar a la botiga principal</A>
</BODY>
</HTML>