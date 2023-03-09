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

echo $panier1;
echo $panier2;
?>

<?php
include("partials/footer.php");
?>