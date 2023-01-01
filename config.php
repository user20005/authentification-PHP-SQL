<?php 
   try
   {
     $bdd = new PDO('mysql:host=;dbname=id20051654_mrz;charset=utf8', 'id20051654_prjmrz', 'Fjx=#fZ}wc2jYZq=');
    //  $bdd = new PDO('mysql:host=localhost;dbname=mrz;charset=utf8', 'root', 'mytest');
   }
   catch(PDOException $e)
   {
    die('Erreur : '.$e->getMessage());
   }
?>
