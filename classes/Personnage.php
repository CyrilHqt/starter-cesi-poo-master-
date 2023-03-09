<?php
Class Personnage{
    private string $nom;
    private string $img;
    private int $age;
    private bool $sexe;
    private int $force;
    private int $agilite;

    const HOMME =true;
    const FEMME =false;

    const FORCE_MIN = 3;
    const FORCE_MED = 5;
    const FORCE_MAX = 7;

    const AGILITE_MIN = 2;
    const AGILITE_MED = 4;
    const AGILITE_MAX = 5;

    private static array $personnages = [];

    public function __construct($nom, $age, $sexe, $force, $agilite, $img)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
        $this->img = $img;
        self::$personnages[]= $this;
    }

    public static function getListPersonnage():array
    {
        return self::$personnages;
    }

    /**
     * @return string
     */
    public function getNom():string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return void
     */
    public function setNom(string $nom):void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
        $this->img = $img;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return bool
     */
    public function isSexe(): bool
    {
        return $this->sexe;
    }

    /**
     * @param bool $sexe
     */
    public function setSexe(bool $sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return int
     */
    public function getForce(): int
    {
        return $this->force;
    }

    /**
     * @param int $force
     */
    public function setForce(int $force): void
    {
        $this->force = $force;
    }

    /**
     * @return int
     */
    public function getAgilite(): int
    {
        return $this->agilite;
    }

    /**
     * @param int $agilite
     */
    public function setAgilite(int $agilite): void
    {
        $this->agilite = $agilite;
    }

    public function afficherInfo()
    {
        echo "<div class='gauche'>";
        echo "<img src='assets/img/".$this->img."' alt='".$this->img."' />";
        echo "</div>";
        echo "<div class='gauche'>";
        echo "</div>";
        echo "<div class='clearB'>";
        echo "Nom : ".$this->nom;
        echo "<br />";
        echo "Age : ".$this->age;
        echo "<br />";
        echo "<b>Sexe</b> :";
        if($this->sexe){
            echo "Homme<br/>";
        }else{
            echo "Femme<br/>";
        }
        echo "Force : ".$this->force;
        echo "Agilite : ".$this->agilite;
        echo "<br />";

    }
}

?>