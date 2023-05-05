<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
</head>
<body>
    <?php require_once('menu.php');?>
    <main>
        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row mt-3">
                    <div class="col-12 col-md-6 col-sm-12 col-lg-6 py-4 text-center mt-5">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="stock1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                    <img src="stock2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="stock.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 col-lg-6 py-4 text-center mt-5">
                        <form class="row mb-2" method="post" action="">
                            <legend class="text-warning">Enregistrement du produit</legend>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-newspaper"></i></span>
                                <input name="product" type="text" class="form-control" placeholder="Produit" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="col-12 my-2">
                                <input name="description" type="text" placeholder="Description" class="form-control" required>
                            </div>
                            <div class="input-group my-2">
                                <span class="input-group-text" id="basic-addon1">$</span>
                                <input name="Prix_achat" type="text" class="form-control" placeholder="prix d'achat" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="col-12 my-2">
                                <input name="Qnte" type="text" placeholder="Quantité des produits" class="form-control" required>
                            </div>
                            <div class="col-12 my-2">
                                <button name="submit" type="submit" class="btn btn-warning w-100 my-2 text-light bg-warning">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
<?php
    require_once('connexion.php');
    if(isset($_POST['submit'])){
        $nom = $_POST['product'];
        $description = $_POST['description'];
        $prix_achat = $_POST['Prix_achat'];
        $Qnte= $_POST['Qnte'];

        $insertion = "INSERT INTO produit (nom_produit, description,Prix_achat,Qnte) VALUES('$nom', '$description','$prix_achat','$Qnte')";
        $execute = $pdo->query($insertion);
                
        if($execute == true){
            echo "Informations bien enregistrées";
        }
        else{
            echo "L'enregistrement n'a pas pu être effectué";
        }
    }
?>