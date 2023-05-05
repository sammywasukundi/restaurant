<?php
    class Compte{
      private  $num_compte;
      public $solde;
      private $proprietaire;

      public function Augmenter_solde($montant){
            return $this->solde+$montant;
      }
      public function Diminuer_solde($montant){
            return $this->solde+$montant;
      }
    } 
    // create object
    $agent = new Compte();

    $agent->solde=12;
    
    echo $agent->Augmenter_solde(1)."</br>";
    echo $agent->Diminuer_solde(3);
?>