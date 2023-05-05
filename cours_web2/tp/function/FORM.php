<!DOCTYPE html>
<html>
    <head>
        <title> Essaie</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            //echo " Essaie Php";
        ?>
        <div >
            <form method="POST" name="form1" action="traitement.php">
                <p>
                    <input type="text" class="inputC" placeholder="votre nom" name="nom"><br>
                    <input type="text" class="inputC" placeholder="votre post nom" name="pnom"><br>
                    <input type="number"class="inputC" placeholder="votre age" name="age"><br>
                    <input type="radio" name="sexe" value="Homme" >Homme
                    <input type="radio" name="sexe" value="Femme">Femme<br>
                    <input type="submit" class="btn" value="soumetre"><br>
                    
                <p>
            </form>
        </div>
    </body>
</html>