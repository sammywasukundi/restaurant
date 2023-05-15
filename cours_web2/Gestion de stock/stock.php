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
        require_once('menu.php');
        require_once('connexion.php');
    ?>
    <table class="table" style="margin-top: 10%;">
        <thead>
            <tr>
                <th scope="col">num</th> 
                <th scope="col">designation</th>
                <th scope="col">description</th>
                <th scope="col">Prix d'achat</th>
                <th scope="col">Quantité</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $recup =$pdo->query("SELECT * from produit ");
                $d = 1;
                // $suppr = $_POST['delete'];
                // $del = $pdo->query('DELETE FROM produit WHERE id_produit="id_produit"');
                while($donnees=$recup->fetch()){
                    ?> 
                    <tr>
                    <td> <?php echo $d  ?> </td>
                        <td> <?php echo $donnees['nom_produit'] ; ?> </td>
                        <td> <?php echo $donnees['description'];  ?> </td>
                        <td> <?php echo $donnees['Prix_achat'].'$'; ?> </td>
                        <td> <?php echo $donnees['Qnte'] ; ?> </td>
                    </tr>
                    <?php
                    ++$d;
                }
            ?>
        </tbody>
    </table>
    <form action="" method="post">
    <div class="col-4 my-2">
        <button name="submit" type="submit" class="btn btn-warning w-100 my-2 text-light bg-warning">Vider</button>
        <?php
            if(!empty($_POST['submit'])){
                $btnVider=$_POST['submit'];
                $vider=$pdo->query("TRUNCATE TABLE 'produit'");
                $btnVider=$vider;

            }
        ?>
    </div>        
    </form>

</body>
</html>