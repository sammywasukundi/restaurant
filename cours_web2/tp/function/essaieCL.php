<?php
    class comptb{
        public $num;
        public $sol=0;
        public function Augm($mon){
             $x=$this->sol+$mon;
             return $x;
        }
        //public function __construct($num,$sol){
          //  $this->num=$num;
           // $this->sol=$sol;
        //}
    }
    $comp1=new comptb();
    $comp1->num="009";
    $comp1->sol=45;
    echo "Le solde de ".$comp1->num." ".$comp1->Augm(6);
?> 