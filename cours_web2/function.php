<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comptteur</title>
    <!-- <link rel="stylesheet" href="web2.css"> -->
</head>
<body>
    <div class="form">
        <form action="" method='post'>
            <div class="div_label">
                <input name="nombre" type="text" class="form-control" placeholder="Entrez un nombre">
                <button type="submit" class="btn" name="Submit">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
<?php    
    
    if(isset($_POST['nombre'])){
        $nbre=$_POST['nombre'];
        echo unite($nbre);
        $unit;
    }
    
    function unite($unit){
        $totesLettres;
        switch($unit){
            case 0:
                $totesLettres="zero";
            case 1:
                $totesLettres="un";
                break;
            case 2:
                $totesLettres="deux";
                break;
            case 3:
                $totesLettres="trois";
                break;
            case 4:
                $totesLettres="quatre";
                break; 
            case 5:
                $totesLettres="cinq";
                break;
            case 6:
                $totesLettres="six";
                break;
            case 7:
                $totesLettres="sept";
                break;
            case 8:
                $totesLettres="Huit";
                break;
            case 9:
                $totesLettres="neuf";
                break;                
        }
        return $totesLettres;
    }
?>