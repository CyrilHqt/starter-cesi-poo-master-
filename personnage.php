<?php

use classes\Warrior;

include("partials/header.php");
include("partials/menu.php");

require_once('classes/Personnage.php');
require_once('classes/Warrior.php');
?>

    <h2> Personnage : </h2>
<?php
    $p1 = new Personnage("Luke", 27, Personnage::HOMME, Personnage::FORCE_MED, Personnage::AGILITE_MED, "player.png");

    $p2 = new Personnage("Katy", 22, Personnage::FEMME, Personnage::FORCE_MIN, Personnage::AGILITE_MAX, "playerF.png" );

    $p3 = new Personnage("Marc", 33, Personnage::HOMME, Personnage::FORCE_MAX, Personnage::AGILITE_MIN, "playerM.png");

    $p4 = new Warrior("Aragorn", 38, Personnage::HOMME, Personnage::FORCE_MAX, Personnage::AGILITE_MAX, "playerM.png", "Épée");

    $persos = Personnage::getListPersonnage();
    foreach($persos as $perso){
        $perso->afficherInfo();
        echo "<br/>------------------------------";
        echo "<br/>";
    }
    echo "<br />";
    echo $p4->getWeapon();

?>
<?php
include("partials/footer.php");
?>