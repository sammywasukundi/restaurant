<?php
    // recuperation et stockage
    $nom=$_POST['firstname'];
    $postnom=$_POST['name'];
    $age=$_POST['age'];
    $pwd=$_POST['password'];
    $genre=$_POST['genre'];
    $civilite;
    if($genre == 'homme'){
        $civilite = 'Monsieur'; 
    }
    else if($genre == 'Femme'){
        $civilite = 'Madame';
    }

    if($age % 2 != 0){
        echo $age.' '.'est impair'.'</br>';
    }
    else{
        echo $age.' '.'est pair'.'</br>';
    }
    echo $civilite.' '.$nom.' '.$postnom.' '."a l'age de ".$age.' '. 'ans'. ' '.'</br>'.$genre;
?>