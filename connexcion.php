<?php
session_start(); // Démarrage de la session
require_once 'config.php'; // On inclut la connexion à la base de données

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
// On regarde si l'utilisateur est inscrit dans la table utilisateurs
$verifier = $bdd->prepare('SELECT * FROM user WHERE email = ? and password = ?');
$verifier->execute(array($email, $password));
$data = $verifier->fetchAll();
if (count($data) > 0) {
    $_SESSION["ps"] = $data[0]['pseudo'];
    $_SESSION["autoriser"] = "oui";
    header("location:./landing.php");
} else {
    header("location:index.html");
    die();
}
?>
