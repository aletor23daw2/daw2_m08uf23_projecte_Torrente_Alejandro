<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("location: index.php");
    exit;
}
?>

<html>
<head>
    <title>PÀGINA WEB DEL MENÚ PRINCIPAL DE L'APLICACIÓ D'ACCÉS A BASES DE DADES LDAP</title>
</head>
<body>
    <h2>MENÚ PRINCIPAL DE L'APLICACIÓ D'ACCÉS A BASES DE DADES LDAP</h2>
    <h3></h3>
    <ul>
        <li><a href="https://zends-dacomo/autent/llista_usuaris_form.php">Veure Usuari</a></li>
        <li><a href="https://zends-dacomo/autent/afegir_usuari_form.php">Afegir Usuari</a></li>
        <li><a href="https://zends-dacomo/autent/esborrar_usuari_form.php">Esborrar Usuari</a></li>
        <li><a href="https://zends-dacomo/autent/modificar_atribut_form.php">Modificar Atribut</a></li>
    </ul>
    <a href="https://zends-dacomo/autent/index.php">Torna a la pàgina inicial</a>
    <a href="https://zends-dacomo/autent/logout.php">Cerrar sesión</a>
</body>
</html>
