<?php

require 'personnage.php';
require 'archer.php';

$merlin = new personnage('Merlin');
$harry = new personnage('Harry');

$legolas = new Archer('Legolas');

$legolas->attaque($harry);

var_dump($merlin, $harry, $legolas);



?>