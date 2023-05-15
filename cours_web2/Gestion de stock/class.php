<?php
    class Produit{
      public  $numero;
      public $nom;
      public $description;
      public $prix_achat;
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
      public function __construct($numero,$nom,$description,$prix_achat,$Qnte_stock){
            $this->numero=$numero;
            $this->nom=$nom;
            $this->description=$description;
            $this->prix_achat=$prix_achat;
            $this->Qnte_stock=$Qnte_stock;
      }
    } 
?>