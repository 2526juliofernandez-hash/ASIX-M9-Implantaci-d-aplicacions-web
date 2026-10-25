<?php
session_start();
$usuari = isset($_POST['usuari']) ? $_POST['usuari'] : "";
$contrasenya = isset($_POST['contrasenya']) ? $_POST['contrasenya'] : "";

if ($usuari == "anna" && $contrasenya == "anna") {
    $_SESSION['usuari'] = $usuari;
    header("Location: contingut1.php");
    exit();
} else {
    echo "Dades incorrectes. <a href='index.html'>Tornar</a>";
}
?>