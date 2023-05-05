<?php
    try{
        require_once('connexion.php');
        $pdo->exec('CREATE TABLE Etudiant(pseudo varchar(255), matriucle int )');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
?>