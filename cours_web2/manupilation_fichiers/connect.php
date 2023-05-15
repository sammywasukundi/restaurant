<?php
    try{
        $pdo=new PDO('mysql: host=lacalhost;dbname=entreprise','root','');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
?>