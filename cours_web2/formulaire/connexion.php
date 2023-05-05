<?php
    try{
        $pdo=new PDO('mysql: host=lacalhost;dbname=web2','root','');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
?>