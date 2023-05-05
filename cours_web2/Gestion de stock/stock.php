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
                require_once('connexion.php');
                $recup =$pdo->query("SELECT * from produit ");
                $d = 1;
                while($donnees=$recup->fetch()){
                    ?> 
                    <tr>
                    <td> <?php echo $d  ?> </td>
                        <td> <?php echo $donnees['nom_produit'] ; ?> </td>
                        <td> <?php echo $donnees['description'];  ?> </td>
                        <td> <?php echo $donnees['Prix_achat'] ; ?> </td>
                        <td> <?php echo $donnees['Qnte'] ; ?> </td>
                    </tr>
                    <?php
                    ++$d;
                }
            ?>
        </tbody>
    </table>
</body>
</html>