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
            <form method="POST" name="form1" action="">
                <p>
                    <input type="text" class="inputC" placeholder="Entrer un nombre" name="nbr1"><br>
                    <input type="submit" class="btn" value="soumetre" name="btn1"><br>
                    
                <p>
            </form>
           
        </div>
        <?php
            include_once("TestFunction.php");
            
            if(isset($_POST['btn1']))
                {
                    $nombre=$_POST['nbr1'];
                    $diz;
                    $unit;
                    $cent;
                    $mille;
                    $multiple_mille;
                    $multiple_dix_mille;

                    $multiple_dix_mille=intdiv($nombre,100000);
                    $reste_multiple_dix_mille=intval($nombre%100000);

                    $multiple_mille=intval($nombre/10000);
                    $reste_multiple_mille=$nombre%10000;

                    $mille=intval($nombre/1000);
                    $reste_mille=$nombre%1000;

                    $cent=intval($nombre/100);
                    $reste_cent=$reste_mille%100;
                
                    $diz=intval($reste_cent/10);
                    $unit=$reste_cent%10;

                    
                    if($nombre == 11 || $nombre == 12 || $nombre == 13 || $nombre == 14 || $nombre == 15 || $nombre == 16){
                        // $nombre=$_POST['nbr1'];
                        echo exception($nombre);
                    }
                    else{  
                        echo multiple_dix_mille($multiple_dix_mille)." ". multiple_mille($multiple_mille)." ".millaine($mille)." ".centaine($cent)." ".Diz($diz)." ".unite($unit);
                    }

                    
                    

                    
                }
            
            
        ?>
    </body>
</html>