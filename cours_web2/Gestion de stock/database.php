<?php
    try{
        $pdo=new PDO('mysql: host=lacalhost','root','');
        $pdo->exec('CREATE DATABASE stock');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
?>