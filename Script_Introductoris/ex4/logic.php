<?php

if (isset($_GET["musica"])) {
    $musica = $_GET["musica"];

    if ($musica == "rock") {
        echo "T'agrada el rock! Molt bona elecció.";

    } elseif ($musica == "pop") {
        echo "T'agrada el pop! Música molt coneguda.";

    } elseif ($musica == "rap") {
        echo "T'agrada el rap! Tens bon ritme.";

    } elseif ($musica == "reggaeton") {
        echo "T'agrada el reggaeton! A bailar!";
    }

    echo "<br><br>";
    
    echo "<form action='index.php' method='get'><button>Tornar</button></form>";

}

?>