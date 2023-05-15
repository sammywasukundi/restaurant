<?php
include('../modele/database.php');
include('../modele/connexion.php');
    if(isset($_POST['submit'])){
        if(isset($_POST['name'],$_POST['pwd'],$_POST['mail'])){
            if($_POST['name'] != '' && $_POST['pwd'] !='' && $_POST['confirmpwd'] != '' && $_POST['mail']!=''){
                $pseudo=$_POST['name'];
                $pass=md5('12$'.$_POST['pwd'].'fierte');
                $confirmpwd=$_POST['confirmpwd'];
                $mail=$_POST['mail'];




                if($_POST['confirmpwd'] != $_POST['pwd']){
                    echo '<idv style="position: absolute; top: 68%; left: 37%; text-shadow: 2px 2px 2px rgba(0,0,0,0.2); font-size: 22px; font-style: bold;">'.'Veuillez taper le même mot de passe'.'</div>';
                }
                else{
                    if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['mail'])){

                        $req = $pdo->prepare("INSERT INTO utilisateur(pseudo,password,mail) VALUES(?,?,?)");
                        $req->execute(array(
                            $pseudo,
                            $pass,
                            $mail
                            // $_FILES['fichier']['name']
                        )); 
                        // $insertion="INSERT INTO utilisateur(pseudo,password,email) VALUES('$pseudo','$pass','$mail')";
                        // $execute = $pdo->query($insertion);
                
                        if($req == true){
                            echo "Informations bien enregistrées";
                            // header('Location: ../vue/biblio.php');
                        }
                        else{
                            echo "L'enregistrement n'a pas pu être effectué";
                        }
                    }
                    else{
                        echo '<idv style="position: absolute; top: 68%; left: 37%; text-shadow: 2px 2px 2px rgba(0,0,0,0.2); font-size: 22px; font-style: bold;">'.'Veuillez taper un vrai adresse email'.'</div>';                      
                    }
                }

                // verifions que le fichier a été transmis sans erreurs
                if(isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0){
                    // verifions la taille du fichier
                    if($_FILES['fichier']['size'] < 5000000)
                    {
                        // stockons le nom du fichier dans une variable
                        $nom_fichier = pathinfo($_FILES['fichier']['name']);
                        // récuperons l'extension du fichier
                        $recup_extension =  $nom_fichier['extension'];
                        // définissons les extensions autorisées
                        $extensions =array('zip','png','rar','iso','jpg','JPG','jpeg','pdf','docx','xlx');
                        // verifions si l'extension du fichier uploader est autorisé
                        if(in_array($recup_extension,$extensions)){
                            // deplaçons le fichier vers notre serveur
                            if(move_uploaded_file($_FILES['fichier']['tmp_name'],'avatar/'.basename($_FILES['fichier']['name'])))
                            {
                                $req = $pdo->prepare("INSERT INTO user(fichier) VALUES(?)");
                                $req->execute(array(
                                    $_FILES['fichier']['name']
                                ));                      
                            }
                        }else{
                            echo 'extension non autorisée';
                        }
                    }else
                    {
                        echo 'Fichier volumineux';
                    }
                }
            }
        }
    }
?>