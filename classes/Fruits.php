<?php
namespace classes;

class Fruits
{
    private string $nom;
    private int $poids;
    private int $prix;

    private static array $fruits = [];

    const POMME = "Pomme";
    const CERISE = "Cerise";

    const POMME_IMG= "apple.png";
    const CERISE_IMG = "cherry.png";

    public function __construct($nom, $poids)
    {
        $this->nom = $nom;
        $this->poids= $poids;
        $this->prix = $this->getPrixFruits($nom);
        self::$fruits[]= $this;
    }

    public static function getListFruits():array
    {
        return self::$fruits;
    }

    private function getPrixFruits($nom): int
    {
        if($nom === self::POMME){
            return 15;
        }
        return 20;
    }

    private function getAffichageImg(): string
    {
        if($this->nom === self::POMME){
            return "<img src ='assets/img/".self::POMME_IMG."' alt='image pomme' /> <br/>";
        }
        return "<img src ='assets/img/".self::CERISE_IMG."' alt='image cerise' /><br/>";
    }

    public function __toString()
    {
        $affichage = $this->getAffichageImg();
        $affichage .= "Nom : ".$this->nom."<br/>";
        $affichage .= "Poids : ".$this->poids."<br/>";
        $affichage .= "Prix : ".$this->prix."<br/>";
        return $affichage;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getPoids(): int
    {
        return $this->poids;
    }

    /**
     * @param int $poids
     */
    public function setPoids(int $poids): void
    {
        $this->poids = $poids;
    }

    /**
     * @return int
     */
    public function getPrix(): int
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix(int $prix): void
    {
        $this->prix = $prix;
    }

}
?>