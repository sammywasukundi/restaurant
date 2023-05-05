<?php
if($_POST['nom']!=""){
    echo "ok";
}
else{
    echo" apana";
}
// recuper les valuers depuis le formulaire et les stocker dans des variables
$nom=$_POST['nom'];
$pnom=$_POST['pnom'];
$age=$_POST['age'];
$sexe=$_POST['sexe'];
$civilite;
if($sexe=="Homme"){
    $civilite="Monsieur";
}
else if($sexe=="Femme"){
    $civilite="Madame";
}
//echo $civilite." ".$nom." ".$pnom." est agé de ". $age." ans"."vous êtes ".$sexe;
if($age%2!=0){
    echo $age." est impair";
}
else{
    echo $age." est pair";
}
?>
