<?php
session_start();

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

ini_set('display_errors', 0);

if ($_POST['cts'] && $_POST['adm']){
    $opcions = [
        'host' => 'zend-dacomo.fjeclot.net',
        'username' => "cn=admin,dc=fjeclot,dc=net",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];  

    $ldap = new Ldap($opcions);
    $dn = 'cn='.$_POST['adm'].',dc=fjeclot,dc=net';
    $ctsnya = $_POST['cts'];

    try{
        $ldap->bind($dn, $ctsnya);
        $_SESSION['logged_in'] = true; 
        header("location: menu.php");
        exit; 
    } catch (Exception $e){
        echo "<b>Contrasenya incorrecta</b><br><br>";       
    }
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("location: menu.php"); 
    exit;
}
?>
<html>
    <head>
        <title>
            AUTENTICACIÓ AMB LDAP 
        </title>
    </head>
    <body>
        <form method="POST" action="">
            <label for="adm">Nom d'usuari:</label>
            <input type="text" id="adm" name="adm">
            <br>
            <label for="cts">Contrasenya:</label>
            <input type="password" id="cts" name="cts">
            <br>
            <input type="submit" value="Iniciar sessió">
        </form>
        <a href="https://zends-dacomo/autent/index.php">Torna a la pàgina inicial</a>
    </body>
</html>

