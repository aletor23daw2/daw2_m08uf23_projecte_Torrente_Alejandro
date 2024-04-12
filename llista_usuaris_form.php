<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizació dades usuari</title>
</head>
<body>
    <h2>Visualizació dades usuari</h2>
    <form action="llista_usuari.php" method="POST">
        <label for="uid">Identificador d'usuari:</label><br>
        <input type="text" id="uid" name="uid" required><br><br>

        <label for="unorg">Unitat Organizativa:</label><br>
        <input type="text" id="unorg" name="unorg" required><br><br>

        <button type="submit">Visualitzar dades</button><br><br>
        
        <a href="https://zends-dacomo/autent/menu.php">Torna al menu</a>
    </form>
</body>
</html>
