<?php
    try{
        $pdo=new PDO('mysql: host=lacalhost','root','');
        $pdo->exec('CREATE DATABASE biblio_numerique');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
?>