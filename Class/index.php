<?php
require'personnage.php';


$merlin = new personnage("Merlin");

$merlin->regenerer();
var_dump($merlin);

$harry = new personnage("Harry");
$harry->vie=-20;
var_dump($harry->mort()); 

$harry->regenerer();

$merlin->attaque($harry);
var_dump($harry);

if($harry->mort()){
    echo 'Harry est mort';

} else {
    echo 'Harry ' .$harry->vie.'HP';
}



?>