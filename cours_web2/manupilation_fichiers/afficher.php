<?php require('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
  $affich = $pdo->query("SELECT * FROM fichiers");
  while($res = $affich->fetch())
  {?>
    <div style="display: flex; justify-content: center; align-items: center;"><img  style=" border-radius: 50%;"src="fichiers/<?php echo $res['fichier'];?>" alt=""></div>
<?php
  }
?>