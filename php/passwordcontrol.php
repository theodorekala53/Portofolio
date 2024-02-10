<?php
include 'php/config.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_GET["mot_de_passe"] === $config['mot_de_passe_autorise']) {
    // Si le mot de passe est correct, redirige vers le PDF
    header("Location: TOP Projektvorstellung DAV-1.pdf");
    exit;
} else {
    // Si le mot de passe est incorrect, affiche un message d'erreur
    echo "Mot de passe incorrect";
}
?>
