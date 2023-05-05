<?php
class Employe
{

    protected $nom;
    protected $prenom;
    protected $salaire;
    protected $sexe;
    protected $post;
    protected $etatCivil;
    protected $retunus;

    public function __construct(
        string $nom,
        string $prenom,
        float $salaire = 100.00,
        string $sexe,
        string $post,
        string $etatCivil,
        float $retenus = 0.00
    ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->salaire = $salaire;
        $this->sexe = $sexe;
        $this->post = $post;
        $this->etatCivil = $etatCivil;
        $this->retunus = $retenus;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function getPost()
    {
        return $this->post;
    }
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }
}
