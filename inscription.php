<?php
require_once 'config.php'; 
$pseudo = $_POST['pseudo'];
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
    $insert = $bdd->prepare("INSERT INTO user(pseudo, email, password) VALUES(?, ?, ?)");
    $insert->execute(array($pseudo, $email, $password));
    header('Location:index.html');
?>