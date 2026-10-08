<?php
if (isset($_GET["nombre"]) && 

    isset($_GET["cognoms"]) && 

    isset($_GET["email"]) && 

    isset($_GET["missatge"])) {

    $nom = $_GET["nombre"];

    $cognoms = $_GET["cognoms"];

    $email = $_GET["email"];
    
    $missatge = $_GET["missatge"];


    echo "Missatge rebut, " . $nom . " " . $cognoms . ". Gràcies per contactar. Et respondrem a " . $email;
    
    echo "<form action='index.html' method='get'><button>Tornar</button></form>";

} else {
    echo "No s'ha desat el missatge. Error.";
    
    echo "<form action='index.html' method='get'><button>Tornar</button></form>";
} 
?>