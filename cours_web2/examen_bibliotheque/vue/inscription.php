<?php include('../controleur/C_inscription.php'); ?>
<?php include('../modele/database.php'); ?>
<?php include('../modele/connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="fonts-6/css/all.css">
    <script src="interaction.js"></script>
    <title>inscription</title>
</head>
<body>
    <main>
        <section class="py-5 bg-white mt-5 mb-4">
            <div class="container">
                <div class="card mb-5 border border-none">
                    <div class="row py-5 mb-5">
                        <h2 class="text-center display-5 fw-bolder fs-1 text-warning">Page d'insription</h2>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="text-center">
                                <img src="images/log_in.avif" class="rounded" alt="log in" width="100%">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 mt-3">
                            <form class="row py-5" method="post" action="" enctype="multipart/form-data">
                                <div class="col-12 my-2">
                                    <input name="name" type="text" placeholder="Pseudo" class="form-control" id="name" required>
                                </div>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                    <input name="pwd" id="pwd" type="password" class="form-control" placeholder="Mot de passe" aria-label="Username" aria-describedby="basic-addon1" oninput="edit()" required>
                                </div>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                    <input  name="confirmpwd" type="password" class="form-control" placeholder="Confirmation" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                <label id="mot" style="text-align: center; font-family: times new roman; font-size: 25px;"></label>
                                <div class="col-12 input-group mb-1">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input name="mail" type="text" class="form-control" placeholder="Email adress" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="col-12 my-2">
                                    <input name="fichier" type="file" class="form-control" placeholder="photo de profil" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="col-12 my-2">
                                    <button name="submit" type="submit" class="btn btn-warning w-100 my-2 text-light">S'inscrire</button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <link rel="stylesheet" href="interaction.js">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </footer>
</body>
</html>