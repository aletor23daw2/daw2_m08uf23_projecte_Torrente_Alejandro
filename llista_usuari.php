<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("location: index.php");
    exit;
}

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = $_POST['uid'];
    $unorg = $_POST['unorg'];
    
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
        echo "<h2>Dades de l'usuari</h2>";
        echo "<ul>";
        foreach ($entrada as $atributo => $valor) {
            $valor_str = is_array($valor) ? implode(", ", $valor) : $valor;
            echo "<li><b>$atributo:</b> $valor_str</li>";
        }
        echo "</ul>";
        echo '<a href="menu.php">Tornar al menu</a>';
    } else {
        echo "<p>No s'ha trobat cap usuari amb l'identificador '$uid' a la unitat organitzativa '$unorg'.</p>";
    }
} else {
    echo "<p>Si us plau, envieu el formulari per visualitzar les dades de l'usuari.</p>";
}
?>
