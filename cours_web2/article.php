<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="id" placeholder="numéro de l'article"><br><br>
        <input type="text" name="nom" placeholder="nom de l'article"><br><br>
        <input type="text" name="price" placeholder="prix de vente"><br><br>
        <input type="text" name="Qnte" placeholder="quantité en stock"><br><br>
        <input type="submit" value="submit" name='submit'>
    </form>
</body>
</html>
<?php
    class Article{
      public  $num_article;
      public $nom;
      public $prix_vente;
      public $Qnte_stock;
      public function message(){
            echo "Il s'agit de l'article :".$this->num_article."</br>"."article : ".
            $this->nom."</br>"."prix de vente : ".$this->prix_vente."</br>"."quantité en stock : ".$this->Qnte_stock;
      }
      public function Augmenter_Qnte($montant){
            return $this->Qnte_stock+$montant;
      }
      public function Diminuer_Qnte($montant){
            return $this->Qnte_stock-$montant;
      }
      public function __construct($num_article,$nom,$prix_vente,$Qnte_stock){
            $this->num_article=$num_article;
            $this->nom=$nom;
            $this->prix_vente=$prix_vente;
            $this->Qnte_stock=$Qnte_stock;
      }
    } 
    

    // $objetArticle->message();
    // $objetArticle->Diminuer_Qnte(2);
    if(isset($_POST['submit'])){
        $num_article=$_POST['id'];
        $nom=$_POST['nom'];
        $prix_vente=$_POST['price'];
        $Qnte_stock=$_POST['Qnte'];
        $objetArticle = new article($_POST['id'],$_POST['nom'],$_POST['price'],$_POST['Qnte']);
        $objetArticle->message();
    }
?>