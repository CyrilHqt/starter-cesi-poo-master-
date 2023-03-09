<?php
namespace classes;

class Panier{
    private static int $prochainIdentifiant = 1;

    private int $identifiant;
    private array $pommes = [];
    private array $cerises = [];

    public function __construct(){
        $this->identifiant = self::$prochainIdentifiant;
        self::$prochainIdentifiant ++;
    }

    /**
     * Permet d'ajouter des fruits au panier
     * @param $fruit
     * @return void
     */
    public function addFruit($fruit): void
    {
        if($fruit->getNom() === Fruits::POMME){
            $this->pommes[] = $fruit;
        } else if($fruit->getNom() === Fruits::CERISE){
            $this->cerises[] = $fruit;
        }
    }

    /**
     * Permet de gÃ©rer l'affichage de l'objet Fruits
     * @return string
     */
    public function __toString(){
        $affichage = "Voici le contenu du panier " . $this->identifiant ." : <br/>";
        foreach($this->pommes as $pomme){
            $affichage .= $pomme;
        }
        foreach($this->cerises as $cerise){
            $affichage .= $cerise;
        }
        return $affichage;
    }
}
?>