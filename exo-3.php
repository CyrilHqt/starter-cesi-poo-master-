<?php

use classes\Fruits;
use classes\Panier;

require_once("classes/Fruits.php");
require_once("classes/Panier.php");
include("partials/header.php");
include("partials/menu.php");
?>

    <h2> Fruits : </h2>

<?php
$pomme1 = new Fruits(Fruits::POMME,150);
$pomme2 = new Fruits(Fruits::POMME,130);
$pomme3 = new Fruits(Fruits::POMME,160);
$cerise1 = new Fruits(Fruits::CERISE,10);
$cerise2 = new Fruits(Fruits::CERISE,15);
$cerise3 = new Fruits(Fruits::CERISE,20);
$cerise4 = new Fruits(Fruits::CERISE,10);

$panier1 = new Panier();
$panier1->addFruit($pomme1);
$panier1->addFruit($pomme2);
$panier1->addFruit($cerise1);

$panier2 = new Panier();
$panier2->addFruit($pomme3);
$panier2->addFruit($cerise2);
$panier2->addFruit($cerise3);
$panier2->addFruit($cerise4);

$paniers = Panier::getListPanier();

?>
    <form action="" method ="POST" >
        <label for="panier"> Panier : </label>
        <select name="panier" id="panier" onChange="submit()">
            <option value=''></option>
            <?php foreach($paniers as $panier): ?>
                <option value='<?= $panier->getIdentifiant() ?>'>Panier nÂ° <?= $panier->getIdentifiant() ?></option>
            <?php endforeach ?>
        </select>
    </form>
<?php
if(isset($_POST['panier'])){
    $afficherPanier = getPanierById((int)$_POST['panier']);
    echo "<h2>Affichage du panier ".$_POST['panier'] ."</h2>";
    echo $afficherPanier;
}

function getPanierById($id){
    global $paniers;
    foreach($paniers as $panier){
        if($panier->getIdentifiant() === $id){
            return $panier;
        }
    }
}

?>

<?php
include("partials/footer.php");
?>