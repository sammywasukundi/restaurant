<?php
    try{
        require_once('connexion.php');
        $pdo->exec("CREATE TABLE produit (id_produit INT AUTO_INCREMENT PRIMARY KEY,nom_produit VARCHAR(50) NOT NULL)");
        $pdo->exec("CREATE TABLE stock (id_stock INT AUTO_INCREMENT PRIMARY KEY,id_produit INT,solde_produit INT NOT NULL)");
        $pdo->exec("CREATE TABLE entree (id_entree INT AUTO_INCREMENT PRIMARY KEY,id_produit INT, Qnte_entree INT NOT NULL)");
        $pdo->exec("CREATE TABLE sortie (id_sortie INT AUTO_INCREMENT PRIMARY KEY,id_produit INT, Qnte_sortie INT NOT NULL)");
    }
    catch(Exception $e){
        die("Connection failed". $e->getMessage());
    }
?>