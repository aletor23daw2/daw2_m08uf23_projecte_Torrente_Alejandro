<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("location: index.php");
    exit;
}
?>

<html>
<head>
    <title>Formulari esborrar usuari</title>
</head>
<body>
    <h2>Formulari per esborrar usuari</h2>
    <form method="post" action="esborrar_usuari.php">
        <label for="uid">UID:</label>
        <input type="text" id="uid" name="uid" required><br><br>

        <label for="unorg">Unitat Organitzativa:</label>
        <input type="text" id="unorg" name="unorg" required><br><br>

        <input type="submit" value="Eliminar Usuario"><br><br>
        
        <a href="https://zends-dacomo/autent/menu.php">Torna al menu</a>
    </form>
</body>
</html>
