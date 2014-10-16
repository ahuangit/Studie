<!--*********************************TABLEAU DES LANGUES*****************************************-->


<?php

function mytext($txt)
{
    $locale ["pl"] = array (
        "votre_avis" => "ocema" ,
        "votre_langue" => "jezyk" ,
    );

    $locale ["fr"] = array (
        "votre_avis" => "votre avis" ,
        "votre_langue" => "votre langue" ,
    );

    return $locale[$_POST["Language"]][$txt];
    mytext ("votre_avis");
}
?>


<!--*******************************FONCTIONS *******************************************************

?php
var_dump($locale);exit; //DEBUG
?>
******************-->

<?php $_avis = $_POST["a"];
      $_star = $_POST["star"];
      $_language = $_POST["Language"];
?>

<!--*******************************************************************************************-->





Language selection : <?= $_language ?> <br>

Mon avis : <?= $_avis ?>

<?php
    for ($x=0; $x<=$_star; $x++) {
    echo "*";
}
?>


<h1><?=$locale[$_POST["Language"]]["votre_avis"]?></h1>
<h1><?=mytext("votre_langue")?></h1>