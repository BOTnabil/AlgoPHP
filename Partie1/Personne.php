<?php

class Personne {

    //Attributs
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;

    public function __construct(string $nom, string $prenom, string $dateDeNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
    }

    //getter et setter 
    public function getNom(): string 
    {
        return $this->nom;
    }

  
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

  
    public function getPrenom(): string
    {
        return $this->prenom;
    }

   
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    
    public function getDateDeNaissance(): DateTime
    {
        return $this->dateDeNaissance;
    }

   
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }
}