<?php
    try{
        $pdo=new PDO('mysql: host=localhost;dbname=biblio_numerique','root','');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
    
?>