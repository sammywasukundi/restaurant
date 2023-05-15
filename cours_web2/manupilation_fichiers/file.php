<?php require('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../fonts-6/css/all.css">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="py-5 py-0 bg-white mt-0 mb-4">
            <div class="container mt-5">
                <div class="row gy-4 align-items-center justify-content-center">
                    <div class="col-12 col-md-6 py-5 text-center mt-5">
                        <form style="background-color: rgb(251,250,250); border-radius: 20px 20px 20px 20px; box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;" class="row justify-content-center" method="post" action="" enctype="multipart/form-data">
                            <div class="col-12 my-3">
                                <input style="border-radius: 20px 20px 20px 20px;" name="description" type="text" placeholder="description" class="form-control" required>
                            </div>   
                            <div class="col-12 my-1">
                                <input style="border-radius: 20px 20px 20px 20px;" name="fichier" type="file" placeholder="fichire" class="form-control" required>
                            </div>  
                            <div class="col-12 my-2">
                                <button style="border-radius: 20px 20px 20px 20px;" name="submit" type="submit" class="btn btn-dark w-100 my-2 text-light bg-dark">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </footer>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        try{

            $nom=$_POST['description'];
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
                        if(move_uploaded_file($_FILES['fichier']['tmp_name'],'fichiers/'.basename($_FILES['fichier']['name'])))
                        {
                            $req = $pdo->prepare("INSERT INTO  fichiers (description_file,fichier) VALUES(?,?)");
                            $req->execute(array(
                                $nom,
                                $_FILES['fichier']['name']
                            ));                      }
                    }else{
                        echo 'extension non autorisée';
                    }
                }else
                {
                    echo 'Fichier volumineux';
                }
            }
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
?>