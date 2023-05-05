
<?php
    $marque_ordinateur=array('hp','lenovo','acer','asus','dell');
    // echo $marque_ordinateur[0]."<br>";
    foreach ($marque_ordinateur as $numero){
        echo $numero."<br>";
    }
    $marque_ordinateur[4]='toshiba';
    echo $marque_ordinateur[4];



    $identite = array(
        "nom" => "mumbere",
        "postnom" => "wasukundi",
        "prenom" => "sammy",
        "matricule" => "4283",
    );
    foreach($identite as $personne){
        echo $personne.'<br>';
    }
?>