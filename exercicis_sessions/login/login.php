<?php
session_start();

$usuari = isset($_POST['usuari']) ? $_POST['usuari'] : "";
$contrasenya = isset($_POST['contrasenya']) ? $_POST['contrasenya'] : "";

if ($usuari == "anna" && $contrasenya == "anna") {
    $_SESSION['usuari'] = $usuari;
    header("Location: pagina1.php");
    exit();
} else {
    echo "<p style='color:red;'>Usuari o contrasenya incorrectes.</p>";
    echo "<a href='index.html'>Tornar enrere</a>";
}
?>