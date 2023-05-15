<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require('connexion.php');
        require_once('menu.php');
        require('class.php');
    ?>
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
                            <legend class="text-warning">Sorties</legend>
                            <div class="col-12 my-2">
                                <!-- <input name="id_product_sortie" type="text" placeholder="Id produit" class="form-control" required> -->
                            <select name="id_produit" id="" class="form-control">
                                <?php
                                    $recup=$pdo->query("SELECT * FROM produit");
                                     while($resultat = $recup->fetch()){
                                ?>   
                                    <option value="<?php echo $resultat['id_produit'];?>"><?php echo $resultat['nom_produit'];?></option>
                                <?php
                                    
                                    }

                                ?>

                            </select>
                            </div>
                            <div class="col-12 my-2">
                                <input name="Qnte_sortie" type="text" placeholder="Quantité des produits" class="form-control" required>
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
    if(isset($_POST['submit'])){
        $id_produit_sortie = $_POST['id_produit'];
        $qnte_sortie = $_POST['Qnte_sortie'];

        $insertion = "INSERT INTO sortie (id_sortie,Qnte_sortie) VALUES($id_produit_sortie,$qnte_sortie)";
        $execute = $pdo->query($insertion);
                
        if($execute == true){
            echo "Informations bien enregistrées";
        }
        else{
            echo "L'enregistrement n'a pas pu être effectué";
        }

        $old=$pdo->query("SELECT Qnte FROM produit WHERE id_produit='$id_produit_sortie'");

        if ($d = $old->fetch()) {
            $v = $d['Qnte'] - $qnte_sortie ;
            # code...
            $sortie_produit= new Produit($_POST['id_produit'],null,null,null,$_POST['Qnte_sortie']);
            $diminuer_stock=$pdo->query("UPDATE produit set Qnte = '$v' WHERE id_produit='$id_produit_sortie'");
            $diminuer_stock=$sortie_produit->Diminuer_Qnte($_POST['Qnte_sortie']);
        }
   
    }
?>