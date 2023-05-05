<?php
    try{
        $pdo=new PDO('mysql: host=lacalhost;dbname=stock','root','');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
?>
