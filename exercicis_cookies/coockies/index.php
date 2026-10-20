<?php
$fechahora = "éste es el primer acceso";

$contador = 1;
date_default_timezone_set('Europe/Paris');

if (isset($_COOKIE['fechahora'])){
    // fecha hora del último acceso
    $fechahora = $_COOKIE['fechahora'];
    $contador = $_COOKIE['contador'];
}

setcookie("fechahora", date('d/m/y h:i:s')); // actualiza la cookie
setcookie("contador", $contador + 1); // actualiza la cookie
?>
<HTML>

<HEAD> <TITLE>Uso de cookies en PHP</TITLE> </HEAD>
<BODY>
<H3>Fecha y hora actual: 
<?php

echo date('d/m/y h:i:s');

?>

</H3><BR><B> Contenido de la superglobal $_COOKIE</B><BR>

<?php

echo "Elemento fechahora: ".$_COOKIE['fechahora']."<BR>";
echo "Elemento contador: ".$_COOKIE['contador']."<BR><BR>";
echo "<BR>La última vez que accedió a la página: $fechahora <BR>";

echo "<BR>Cantidad de accesos a esta página: $contador <BR>";

?>

</BODY>

</HTML>