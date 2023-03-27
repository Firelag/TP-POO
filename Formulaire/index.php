<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    



<?php

require 'class/autoloader.php';
autoloader::register();



$form = new BootstrapForm($_POST);









?>


<form action="#" method="post">
    <?php

    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();

?>

</form>


</body>
</html>