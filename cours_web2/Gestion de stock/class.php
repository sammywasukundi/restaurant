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
        require('connexion.php');
        $num_article=$_POST['id'];
        $nom=$_POST['nom'];
        $prix_vente=$_POST['price'];
        $Qnte_stock=$_POST['Qnte'];
        $objetArticle = new article($_POST['id'],$_POST['nom'],$_POST['price'],$_POST['Qnte']);
        
        $insertion = "INSERT INTO produit (id_produit,nom_produit) VALUES($num_article,$nom)";
        $execute = $pdo->query($insertion);
                
        if($execute == true){
            $msgSuccess = "Informations bien enregistrées";
            $objetArticle->message();
        }
        else{
            $msgError = "L'enregistrement n'a pas pu être effectué ou bien";
        }
    }
?>