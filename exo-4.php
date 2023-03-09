<?php

use Classes\Fruits;
use Classes\Panier;

require_once("classes/Fruits.php");
require_once("classes/Panier.php");
include("partials/header.php");
include("partials/menu.php");
?>

    <h2> Fruits : </h2>

<form action="" method ="POST" >
    <fieldset><legend>Panier à créer :</legend>
        <label for="nb_pommes">Nombres de pommes : </label>
        <input type="number" name="nb_pommes" id="nb_pommes"/>
        <label for="nb_cerise">Nombres de cerises : </label>
        <input type="number" name="nb_cerise" id="nb_cerise" />
        <input type="submit" value="Créer le panier" />
    </fieldset>
</form>

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

if(isset($_POST['nb_pommes']) || isset($_POST['nb_cerise'])){
    $p = new Panier();
    $nbPomme = (int)$_POST['nb_pommes'];
    $nbCerise = (int)$_POST['nb_cerise'];
    for($i = 0 ; $i < $nbPomme;$i++){
        try {
            $p->addFruit(new Fruits(Fruits::POMME, random_int(120, 160)));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    for($i = 0 ; $i < $nbCerise;$i++){
        try {
            $p->addFruit(new Fruits(Fruits::CERISE, random_int(30, 40)));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    $paniers[] = $p;
}

foreach($paniers as $panier){
    echo $panier;
}

?>
    <form action="" method ="POST">
        <label for="panier"> Panier : </label>
        <select name="panier" id="panier" onChange="submit()">
            <option value=''></option>
            <?php foreach($paniers as $panier): ?>
                <option value='<?= $panier->getIdentifiant() ?>'>Panier n° <?= $panier->getIdentifiant() ?></option>
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