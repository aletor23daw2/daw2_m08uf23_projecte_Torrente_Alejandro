<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("location: index.php");
    exit;
}
?>

<html>
<head>
    <title>Formulari de modificació d'atributs</title>
</head>
<body>
    <h2>Formulari de modificació d'atributs </h2>
    <form method="post" action="modificar_atribut.php">
        <label for="uid">UID:</label>
        <input type="text" id="uid" name="uid" required><br><br>

        <label for="unorg">Unitat Organitzativa:</label>
        <input type="text" id="unorg" name="unorg" required><br><br>

        <p>Selecciona l'atribut a modificar:</p>
        <input type="radio" id="uidNumber" name="atributo" value="uidNumber">
        <label for="uidNumber">UID Number</label><br>

        <input type="radio" id="gidNumber" name="atributo" value="gidNumber">
        <label for="gidNumber">GID Number</label><br>

        <input type="radio" id="dir_pers" name="atributo" value="dir_pers">
        <label for="dir_pers">Directorio Personal</label><br>

        <input type="radio" id="sh" name="atributo" value="sh">
        <label for="sh">Shell</label><br>

        <input type="radio" id="cn" name="atributo" value="cn">
        <label for="cn">CN</label><br>

        <input type="radio" id="sn" name="atributo" value="sn">
        <label for="sn">SN</label><br>

        <input type="radio" id="givenName" name="atributo" value="givenName">
        <label for="givenName">Given Name</label><br>

        <input type="radio" id="postalAddress" name="atributo" value="postalAddress">
        <label for="postalAddress">Postal Address</label><br>

        <input type="radio" id="mobile" name="atributo" value="mobile">
        <label for="mobile">Mobile</label><br>

        <input type="radio" id="telephoneNumber" name="atributo" value="telephoneNumber">
        <label for="telephoneNumber">Telephone Number</label><br>

        <input type="radio" id="title" name="atributo" value="title">
        <label for="title">Title</label><br>

        <input type="radio" id="description" name="atributo" value="description">
        <label for="description">Description</label><br><br>

        <label for="nuevo_valor">Nuevo Valor:</label>
        <input type="text" id="nuevo_valor" name="nuevo_valor" required><br><br>

        <input type="submit" value="Modificar Atributo"><br><br>
        
        <a href="https://zends-dacomo/autent/menu.php">Torna al menu</a>
    </form>
</body>
</html>
