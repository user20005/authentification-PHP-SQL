<?php
require_once 'config.php'; // On inclu la connexion à la bdd
$pseudo = $_POST['pseudo'];
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
    // $reqemail = $bdd->prepare("SELECT * FROM user WHERE mail = ?");
    $insert = $bdd->prepare("INSERT INTO user(pseudo, email, password) VALUES(?, ?, ?)");
    $insert->execute(array($pseudo, $email, $password));
    header('Location:index.html');
?>