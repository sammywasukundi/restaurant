<?php
class Employe
{
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected $dateNaissance;
    protected $salaire;



    public function __construct(
        int $matricule = 0000,
        string $nom,
        string $prenom,
        date $dateNaissance,
        float $salaire = 0.00

    ) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->salaire = $salaire;
    }

    public function getMatricule()
    {
        return $this->matricule;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }


    public function setMatricule($matricule)
    {
        return $this->matricule = $matricule;
    }
    public function setNom($nom)
    {
        return $this->nom = $nom;
    }
    public function setPostnom($prenom)
    {
        return $this->prenom = $prenom;
    }
    public function setDateNaissance($dateNaissance)
    {
        return $this->dateNaissance = $dateNaissance;
    }
    public function setSalaire($salaire)
    {
        return $this->salaire = $salaire;
    }
    public function Augmenter_solde($montant){
        return $this->salaire+$montant;
    }
    public function Diminuer_solde($montant){
            return $this->salaire-$montant;
    }

}
class Patron extends Employe
{
    public $chiffreAffaire;
    public $pourcentage;

    public function __construct(
        float $chiffreAffaire = 0000.00,
        float $pourcentage = 0.00
    )
    {
        $this->chiffreAffaire=$chiffreAffaire;
        $this->pourcentage=$pourcentage;
    }

    public function getChiffreAffaire(){
        return $this->$chiffreAffaire;
    }
    public function getPourcentage(){
        return $this->$pourcentage;
    }

    public function setChiffreAffaire($chiffreAffaire){
        return $this->chiffreAffaire=$chiffreAffaire;
    }
    public function setPourcentage(){
        return $this->pourcentage=$pourcentage;
    }

    public function CalcSalaire($chiffreAffaire,$pourcentage){
        return ($this->chiffreAffaire * $this->pourcentage)/100;
    }
    public function afficher(){
        echo  '<div class="row gy-4 align-items-center justify-content-center fw-bolder fs-4 text-warning">'.'le calcul'.'('.$this->chiffreAffaire.' * '.$this->pourcentage.')'.'/'.'100 '.'</div>';
    }
}

?>
