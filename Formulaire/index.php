<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    



<?php
require 'form.php';

$form = new Form($_POST);









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