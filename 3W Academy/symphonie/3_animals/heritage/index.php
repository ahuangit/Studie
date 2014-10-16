<?php

namespace Noe;

use Noe\Bird;
use Arche\Bird as Bird2;

include 'animal.php';
include 'bird.php';
include 'fish.php';
include 'bird2.php';

$oiseau = new Bird('coco');
echo $oiseau;
echo '<br>';
echo $oiseau->voler();
echo '<br>';

$oiseau2 = new Bird2('fast');
echo '<br>';
echo $oiseau2;
echo '<br>';
echo $oiseau2->voler();
echo '<br>';