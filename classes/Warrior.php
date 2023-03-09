<?php

namespace classes;
use Personnage;

class Warrior extends Personnage
{
    private string $weapon;

    public function __construct($nom, $age, $sexe, $force, $agilite, $img, $weapon)
    {
        parent::__construct($nom, $age, $sexe, $force, $agilite, $img);
        $this->weapon=$weapon;
    }

    /**
     * @return string
     */
    public function getWeapon(): string
    {
        return $this->weapon;
    }

    /**
     * @param string $weapon
     */
    public function setWeapon(string $weapon): void
    {
        $this->weapon = $weapon;
    }
}

?>