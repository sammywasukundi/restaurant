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

    const MARIE = 10;
    const SPECIALISTE = 100;
    const LOGEMENT = 20;
    const GENRE = 5;


    public function __construct(
        string $nom,
        string $prenom,
        float $salaire = 100.00,
        string $sexe = 'm',
        string $post = 'enseignant',
        string $etatCivil = 'marie',
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

    public function getRetunus()
    {
        return $this->retunus;
    }


    public function setNom($nom)
    {
        return $this->nom = $nom;
    }
    public function setPostnom($prenom)
    {
        return $this->prenom = $prenom;
    }
    public function setSalaire($salaire)
    {
        return $this->salaire = $salaire;
    }
    public function setSexe($sexe)
    {
        return $this->sexe = $sexe;
    }
    public function setPost($post)
    {
        return $this->post = $post;
    }
    public function setEtatcivil($etatCivil)
    {
        return $this->etatCivil = $etatCivil;
    }

    public function  exec()
    {

        $calcul = $this->salaire + self::LOGEMENT;

        if ($this->etatCivil == 'marie') {
            $calcul = $calcul + self::MARIE;
        }



        return $calcul - $this->retunus;
    }
}
