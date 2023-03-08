<?php
include("partials/header.php");
include("partials/menu.php");
require_once "classes/Personnage.php";

?>

<h2> Personnage : </h2>
<?php

$p1 = new Personnage("Luke", 27, true, 5,4,"player.png");
$p1->afficherInfo();
$p2 = new Personnage("Katy", 22, false, 3,6,"playerF.png");
$p2->afficherInfo();
$p3 = new Personnage("Marc", 33, true, 7,2,"playerM.png");
$p3->afficherInfo();

// function afficherPerso($personnage)
// {
//     foreach ($personnage as $index => $value) {
//         if ($index !== "Img" && $index !== "Sexe") {
//             echo "<b>" . $index . "</b> : " . $value . "<br/>";
//         }
//         if ($index === "Sexe") {
//             echo "<b>Sexe</b> :";
//             if ($value) {
//                 echo "Homme <br/>";
//             } else {
//                 echo "Femme <br/>";
//             }
//         }
//     }
// }
?>
<?php
include("partials/footer.php");
?>