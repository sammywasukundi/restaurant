<?php
    try{
        $pdo=new PDO('mysql: host=lacalhost','root','');
        $pdo->exec('CREATE DATABASE web2');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
?>