<?php
session_start(); 
require_once 'config.php'; 
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
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
