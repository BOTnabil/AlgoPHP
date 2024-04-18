<?php

class Titulaire {
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $ville;
    private array $comptesBancaires;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->ville = $ville;
        $this->comptesBancaires = array();
    }

    public function getNom(): string {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): DateTime {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getVille(): string {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function ajouterCompteBancaire(CompteBancaire $compte) {
        $this->comptesBancaires[] = $compte;
    }

    private function calculerAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $dateAjd = new DateTime();
        $difference = $dateNaissance->diff($dateAjd);
        return $difference->y;
    }

    public function __toString() {
        return $this->prenom . " " . $this->nom;
    }

    public function afficherInformations() {
        $result = "Titulaire: " .$this. "<br>
        Date de naissance: " . $this->dateNaissance. "<br>
        Ville: " . $this->ville . "<br>
        Âge: " . $this->calculerAge() . " ans<br>
        Comptes bancaires:<br>";
        foreach ($this->comptesBancaires as $compte) {
            $result .= "- " . $compte;
        }
        return $result;
    }
}
