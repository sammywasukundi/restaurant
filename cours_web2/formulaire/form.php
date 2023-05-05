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
            <div class="container">
                <div class="row gy-4 align-items-center justify-content-center">
                    <div class="col-12 col-md-6 py-5 text-center mt-5">
                        <h2 class="display-5 fw-bolder fs-1">Mon formulaire</h2>
                        <form class="row" method="post" action="">
                            <div class="col-12 my-2">
                                <input name="name" type="text" placeholder="Pseudo" class="form-control" id="name" required>
                            </div>
                            <div class="col-12 input-group mb-2">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input name="matr" type="text" class="form-control" placeholder="matricule" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="col-12 my-2">
                                <button name="submit" type="submit" class="btn btn-dark w-100 my-2">S'inscrire</button>
                            </div>
                        </form> 
                        <?php
                            try{
                                if(isset($_POST['submit'])){
                                    require_once('connexion.php');
                                    $nom=$_POST['name'];
                                    $matricule=$_POST['matr'];
                                    // requette simple
                                    $pdo->exec("INSERT INTO Etudiant VALUES('$nom',$matricule)")
                                    or die(print_r($pdo->errorInfo()));

                                    // requette prepare
                                    // $req_prepare=$pdo->prepare("INSERT INTO Etudiant (pseudo,matricule) VALUES(?,?)");
                                    // $req_prepare->execute(array($nom,$matricule)) or die(print_r($pdo->errorInfo()));
                                }
                            }
                            catch(Exception $e){
                                 die('Erreur '.$e->getMessage());
                            }
                        ?>
                        <?php
                            // require_once('connexion.php');
                            $affiche;
                            $affiche=$pdo->query("SELECT * FROM Etudiant");
                            while($resultat=$affiche->fetch()){
                                echo $resultat['pseudo'];
                            }
                                ?>
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