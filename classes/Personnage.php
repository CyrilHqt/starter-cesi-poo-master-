<?php
class Personnage{

    private $nom;
    private $age;
    private $sexe;
    private $force;
    private $agilite;
    private $img;

    const HOMME = true;
    const FEMME = false;

    const FORCE_MIN = 3;
    const FORCE_MEDIUM = 5;
    const FORCE_MAX = 7;

    const AGILITE_MIN = 2;
    const AGILITE_MEDIUM = 4;
    const AGILITE_MAX = 5;

    private static $personnages = [];

    public function __construct($nom, $age, $sexe, $force, $agilite, $img)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
        $this->img = $img;
        self::$personnages[] = $this;
    }

    public static function getListPersonnage(): array{
        return self::$personnages;
    }

    public function setNom($nom): void
    {
        $this->nom = $nom;
    }
    public function setAge($age): void
    {
        $this->age = $age;
    }
    public function setSexe($sexe): void
    {
        $this->sexe = $sexe;
    }
    public function setForce($force): void
    {
        $this->force = $force;
    }
    public function setAgilite($agilite): void
    {
        $this->agilite = $agilite;
    }
    public function setImg($img): void
    {
        $this->img = $img;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function getSexe(): bool
    {
        return $this->sexe;
    }
    public function getForce(): int
    {
        return $this->force;
    }
    public function getAgilite(): int
    {
        return $this->agilite;
    }
    public function getImg(): string
    {
        return $this->img;
    }

    public function afficherInfo()
    {
        echo "<div class='gauche'>";
        echo "<img src = 'assets/img/" . $this->img . "' alt = '" . $this->img . "' />";
        echo "</div>";
        echo "<div class='gauche'>";
        echo "</div>";
        echo "<div class='clearB'>";
        echo "Nom : " . $this->nom . "<br>";
        echo "Age : " . $this->age . "<br>";
        echo "<b>Sexe : </b> : " . ($this->sexe ? "homme" : "femme") . "<br>";
        echo "Force : " . $this->force . "<br>";
        echo "Agilite : " . $this->agilite . "<br>";
    }
}

?>