<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="web2.css"> -->
    <style>
        .form{
            justify-content: center;
            align-items: center;
            display: flex;
            margin-top: 10px;
            box-shadow: 2px 2px 2px 4px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            width: 500px;
            left: 25%;
            top: 25%;
            position: absolute;
        }
        .div_label{
            align-items: center;
            display: flex;
            padding: 10px 5px;
        }
        .form-control{
            padding: 10px 5px;
            margin: 10px 20px;
            display: flex;
            width: 390px;
            border-radius: 5px;
            outline: none; 
            border: 0.005rem solid black;
        }
        .btn{
            margin: 12px 35px;
            width: 80px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 22px;
        }
    </style>
</head>
<body>
    <h2 style="font-family: Arial, Helvetica, sans-serif; font-size: 28px; font-weight: light;">Calculatrice</h2>
    <div class="form">
        <form action="" method='post'>
                  <div class="div_label">
                    <input name="number1" type="number" class="form-control" id="firstname" placeholder="Nombre 1">
                  </div>
                  <div class="div_label">
                    <input name="number2" type="number" class="form-control" id="name" placeholder="Nombre 2">
                  </div>
                  <div class="div_label">
                    <button type="submit" class="btn" name="multiplication">X</button>
                    <button type="submit" class="btn" name="division">/</button>
                    <button type="submit" class="btn" name="modulo">%</button>
                  </div>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['number1']) AND isset($_POST['number2'])){
        if($_POST['number1'] != '' AND $_POST['number2'] != ''){
            if(isset($_POST['multiplication'])){
                $nbr1=$_POST['number1'];
                $nbr2=$_POST['number2'];
                $reponse=$nbr1 * $nbr2;
                echo $nbr1.' * '.$nbr2.' = '.$reponse;
            }
            if(isset($_POST['division'])){
                $nbr1=$_POST['number1'];
                $nbr2=$_POST['number2'];
                $reponse=$nbr1 / $nbr2;
                echo $nbr1.' / '.$nbr2.' = '.$reponse;
            }
            if(isset($_POST['modulo'])){
                $nbr1=$_POST['number1'];
                $nbr2=$_POST['number2'];
                $reponse=$nbr1 % $nbr2;
                echo $nbr1.' % '.$nbr2.' = '.$reponse;
            }
        }
        else{
            echo 'Veuillez remplir tous les champs';
        } 
    }
    else{
        echo '';
    }
?>