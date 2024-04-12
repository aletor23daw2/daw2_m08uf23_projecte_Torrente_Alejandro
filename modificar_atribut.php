<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("location: index.php");
    exit;
}

require 'vendor/autoload.php';
use Laminas\Ldap\Attribute;
use Laminas\Ldap\Ldap;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = $_POST['uid'];
    $unorg = $_POST['unorg'];
    $atributo = $_POST['atributo'];
    $nuevo_valor = $_POST['nuevo_valor'];
    
    ini_set('display_errors', 0);
    
    $dn = 'uid=' . $uid . ',ou=' . $unorg . ',dc=fjeclot,dc=net';
    
    $opciones = [
        'host' => 'zend-dacomo.fjeclot.net',
        'username' => 'cn=admin,dc=fjeclot,dc=net',
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    
    $ldap = new Ldap($opciones);
    $ldap->bind();
    $entrada = $ldap->getEntry($dn);
    if ($entrada) {
        Attribute::setAttribute($entrada, $atributo, $nuevo_valor);
        $ldap->update($dn, $entrada);
        echo "<b>Atribut modificat</b><br><br>";
        echo '<a href="menu.php">Tornar al menu</a>';
    } else {
        echo "<b>Aquesta entrada no existeix</b><br>";
    }
}
?>
