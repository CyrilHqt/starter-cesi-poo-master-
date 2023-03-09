<?php

use classes\Fruits;

include("partials/header.php");
include("partials/menu.php");
require_once("classes/Fruits.php");
?>

<h2>Fruits :</h2>
<?php
$pomme1 = new Fruits(Fruits::POMME,150);
$pomme2 = new Fruits(Fruits::POMME,130);
$pomme3 = new Fruits(Fruits::POMME,160);
$cerise1 = new Fruits(Fruits::CERISE,10);
$cerise2 = new Fruits(Fruits::CERISE,15);
$cerise3 = new Fruits(Fruits::CERISE,20);
$cerise4 = new Fruits(Fruits::CERISE,10);
$fruits = Fruits::getListFruits();

foreach($fruits as $fruit){
    echo $fruit;
    echo "<br />------------------------ <br />";
}
?>

<?php
include("partials/footer.php");
?>