<?php
    class Membre
    {
        private $pseudonyme;
        private $email;
        private $signature;
        private $actif;

        public function envoyerEmail($titre , $message){
            mail($this->email, $titre, $message);
        }
        public function bannir(){
            $this->actif = false;
            $this->envoyerEmail('Vous avez ete banni !!');
        }

        public function getPseudo(){
            return $this->pseudo;
        }
        public function setPseudo($nouveauPseudo){
            if(!empty($nouveauPseudo) AND strlen($nouveauPseudo) < 15){
                return $this->pseudo =$nouveauPseudo;
            }
        }
        public function __destruct () 
        {
            echo "destruction de l'objet";
        }
    }
?>