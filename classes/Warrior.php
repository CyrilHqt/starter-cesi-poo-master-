<?php
namespace classes;
use Personnage; 

class Warrior extends Personnage{
    private $weapon;

   public function construct($nom, $age, $sexe, $force, $agilite, $img, $weapon)
   {
    parent::construct($nom, $age, $sexe, $force, $agilite, $img);
    $this->weapon = $weapon;
   }

   public function getWeapon(): string{
    return $this->weapon;
   }

   public function setWeapon($weapon): void{
    $this->weapon = $weapon;
   }
}

?>