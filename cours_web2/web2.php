<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="web2.css">
</head>
<body>
<?php
  
  $var = 5;
  if($var <= 5){
    // echo 'jeanpierre';
  }
?>
    <main class="wrapper">
        <section>
            <div class="form">
                
                <form  method='post' name='inscription' action='traitement.php'>
                  <h2 style="font-family: Arial, Helvetica, sans-serif; font-size: 28px; font-weight: light;">Sign up</h2>
                  <div class="div_label">
                    <!-- <label for="firstname" class="form-label">Nom</label> -->
                    <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Nom">
                  </div>
                  <div class="div_label">
                    <!-- <label for="name" class="form-label">Postnom</label> -->
                    <input name="name" type="text" class="form-control" id="name" placeholder="Postnom">
                  </div>
                  <div class="div_label">
                    <!-- <label for="email" class="form-label">Email address</label> -->
                    <input name="age" type="number" class="form-control" id="age" placeholder="Age">
                  </div>
                  <div class="div_label">
                    <!-- <label for="pwd" class="form-label">Password</label> -->
                    <input name="password" type="password" class="form-control" id="email" placeholder="Password">
                  </div>
                  <div class="div_label">
                    <input type="radio" name="genre" value="Homme" >Homme
                    <input type="radio" name="genre" value="Femme" >Femme
                  </div>
                  <div class="div_label">
                    <button type="submit" class="btn" name="Sign">Sign up</button>
                    <button type="submit" class="btn" name="Sing_in">Sign in</button>
                  </div>

                </form>

            </div>
        </section>
    </main>
</body>
</html>
