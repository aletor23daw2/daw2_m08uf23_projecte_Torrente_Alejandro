<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("location: index.php");
    exit;
}
?>

<html>
<head>
    <title>Formulari per afegir usuari</title>
</head>
<body>
    <h2>Formulari per afegir usuari</h2>
    <form method="post" action="afegir_usuari.php">
        <label for="uid">UID:</label>
        <input type="text" id="uid" name="uid" required><br><br>

        <label for="unorg">Unitat Organitzativa:</label>
        <input type="text" id="unorg" name="unorg" required><br><br>

        <label for="num_id">UID Number:</label>
        <input type="number" id="num_id" name="num_id" required><br><br>

        <label for="grup">GID Number:</label>
        <input type="number" id="grup" name="grup" required><br><br>

        <label for="dir_pers">Directori Personal:</label>
        <input type="text" id="dir_pers" name="dir_pers" required><br><br>

        <label for="sh">Shell:</label>
        <input type="text" id="sh" name="sh" required><br><br>

        <label for="cn">CN:</label>
        <input type="text" id="cn" name="cn" required><br><br>

        <label for="sn">SN:</label>
        <input type="text" id="sn" name="sn" required><br><br>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="mobil">Mòbil:</label>
        <input type="tel" id="mobil" name="mobil" required><br><br>

        <label for="adressa">Adreça Postal:</label>
        <input type="text" id="adressa" name="adressa" required><br><br>

        <label for="telefon">Telèfon:</label>
        <input type="tel" id="telefon" name="telefon" required><br><br>

        <label for="titol">Títol:</label>
        <input type="text" id="titol" name="titol" required><br><br>

        <label for="descripcio">Descripció:</label>
        <input type="text" id="descripcio" name="descripcio" required><br><br>

        <input type="submit" value="Crear Usuari"><br><br>
        
        <a href="https://zends-dacomo/autent/menu.php">Torna al menu</a>
    </form>
</body>
</html>
