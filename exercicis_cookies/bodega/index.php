<?php
// Si s'envia el formulari, guardem les dades en cookies
if (isset($_POST['majoredat'])) {
    setcookie("majoredat", $_POST['majoredat'], time() + (86400 * 30));
    setcookie("idioma", $_POST['idioma'], time() + (86400 * 30));
    setcookie("moneda", $_POST['moneda'], time() + (86400 * 30));

    header("Location: botiga.php");
    exit();
}
?>
<HTML>
<HEAD>
    <TITLE>Configuració - Bodega</TITLE>
</HEAD>
<BODY>
    <H3>Selecciona les teves dades</H3>
    <FORM ACTION="index.php" METHOD="POST">
        Ets major d'edat? 
        <INPUT TYPE="radio" NAME="majoredat" VALUE="si"> Sí 
        <INPUT TYPE="radio" NAME="majoredat" VALUE="no"> No
        <BR><BR>

        Idioma: 
        <SELECT NAME="idioma">
            <OPTION VALUE="catala">Català</OPTION>
            <OPTION VALUE="espanyol">Espanyol</OPTION>
            <OPTION VALUE="angles">Anglès</OPTION>
        </SELECT>
        <BR><BR>

        Moneda: 
        <SELECT NAME="moneda">
            <OPTION VALUE="euros">Euros</OPTION>
            <OPTION VALUE="lliures">Lliures</OPTION>
            <OPTION VALUE="dolars">Dòlars</OPTION>
        </SELECT>
        <BR><BR>

        <INPUT TYPE="submit" VALUE="Guardar i entrar">
    </FORM>
</BODY>
</HTML>