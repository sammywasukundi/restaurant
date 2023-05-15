<?php
    require('connexion.php');
    require('classEmploye.php');
?>
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
    <header>
            <nav class="navbar navbar-expand-md bg-white navbar-light fixed-top border-bottom border-light">
                <div class="container">
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="navbar-nav justify-content-center" style="">
                            <li class="nav-item">
                                <a class="nav-link text-decoration-none text-warning fs-3 fw-semibold border-end border-1" href="employe.php">Employé</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-decoration-none text-warning fs-3 fw-semibold border-end border-1" href="patron.php">Patron</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-decoration-none text-warning fs-3 fw-semibold border-end border-1" href="ajout.php">Ajout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-decoration-none text-warning fs-3 fw-semibold border-end border-1" href="retrait.php">Diminution</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
    <main>
        <section class="py-5 py-0 bg-white mt-0 mb-4">
            <div class="container mt-5">
                <div class="row gy-4 align-items-center justify-content-center">
                    <div class="col-12 col-md-6 py-5 text-center mt-5">
                        <form style="background-color: rgb(251,250,250); border-radius: 20px 20px 20px 20px; box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;" class="row justify-content-center" method="post" action="">
                            <div style="border-radius: 20px 20px 20px 20px;" class="col-12 my-2">

                                <select style="border-radius: 20px 20px 20px 20px;" name="id" id="" class="form-control" >
                                    <?php
                                        $selection = $pdo->query("SELECT * FROM employe");
                                        while($res = $selection->fetch()){
                                    ?> 
                                            <option value="<?php echo $res['id'];?>"><?php echo $res['matricule'];?></option>
                                    <?php
                                    
                                        }

                                    ?>
                                </select>
                                
                            </div>
                            <div class="input-group mt-1">
                                <span style="border-radius: 20px 0px 0px 20px;" class="input-group-text" id="basic-addon1">$</span>
                                <input style="border-radius: 0px 20px 20px 0px;" name="solde_retrait" type="text" class="form-control" placeholder="montant à diminuer" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="col-12 my-2">
                                <button style="border-radius: 20px 20px 20px 20px;" name="submit" type="submit" class="btn btn-warning w-100 my-2 text-light bg-warning">Enregistrer</button>
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
        $id_retrait = $_POST['id'];
        $solde_retrait = $_POST['solde_retrait'];
        $patron1 = new Patron($_POST['id'],$_POST['solde_retrait']);
        // $d = $_POST['salaire'];
        // if($d <= '0'){
        //     echo "<script>

        //         alert('Votre solde ne peux pas être diminué car il est égal à 0'); 

        //     </script>";
        // }else
        // {

        

            $retrait=$patron1->Diminuer_solde($_POST['solde_retrait']);
            // $salaire = ($chiffre * $pourcentage)/100;
            // echo $salaire;
            $insert ="INSERT INTO retrait (designation_retrait,montant_retrait) VALUES($solde_retrait,$retrait)";
            $execute = $pdo->query($insert);
            if($execute == true){
                echo "<script>

                        alert('Informations bien enregistrées'); 

                    </script>";
                    echo '<div class="row gy-4 align-items-center justify-content-center fs-5 text-warning">'.'Votre solde a diminué de '.'<strong>'.$_POST['solde_retrait'].'$'.'</strong>'.'</div>';
            }
            else{
                echo "L'enregistrement n'a pas pu être effectué";
            }

            $old=$pdo->query("SELECT salaire FROM employe WHERE id='$id_retrait'");

            if ($d = $old->fetch()) {
                $v = $d['salaire'] - $solde_retrait;

                    # code...
                    $augmenter_stock=$pdo->query("UPDATE employe set salaire = '$v' WHERE id='$id_retrait' ");

            }
        //}
    }
?>