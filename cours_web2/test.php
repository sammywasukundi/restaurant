<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="web2.css"> -->
</head>
<body>
    <div class="form">
        <form action="" method='post'>
            <div class="div_label">
                <input name="text" type="text" class="form-control" placeholder="Entrez un nombre">
                <button type="submit" class="btn" name="Submit">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
<?php
    $nombre=$_POST['text'];
    // function DireBonjour($nombre){
    //     echo 'Bonjour '.$nombre;
    // }
    if(isset($_POST['text'])){
 
    //    echo DireBonjour($nombre); 
                // $nombre=; 
    //     $i = $nombre;
    //     echo '<table border="2">';
    //         // for($nombre;$nombre<$i+10;$nombre++){
    //         //     $multiplication = $nombre*$i;
    //         //     echo '<tr><td>'.$i.' * '.$nombre.' = '.$multiplication.'</td></tr>';
    //         // }
    //         while($nombre<$i+12){
    //             $nombre++;
    //             $multiplication = $nombre*$i;
    //             echo '<tr><td>'.$i.' * '.$nombre.' = '.$multiplication.'</td></tr>';
    //         }
    //         echo '</table>';
    }

?>