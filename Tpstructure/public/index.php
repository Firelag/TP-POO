<?php
require '../app/Autoloader.php';
app\autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}


//Initilisation des objets
$db = new App\database('blog');

ob_start();

if($p === 'home'){
    require '../pages/home.php';
} elseif($p == 'single'){
    require '../pages/single.php';
}

$content = ob_get_clean();
require '../pages/templates/default.php';

?>