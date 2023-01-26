<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }
    </style>
</head>
<body>
<?php include('../../components/menu.php'); ?>
<div class="container">
    <?php
    $a = 8;
    $b = 3;
    $c = 3;
    
    echo $a == $b,"<br>";
    echo $a != $b,"<br>";
    echo $a < $b,"<br>";
    echo $a > $b,"<br>";
    echo $a >= $c,"<br>";
    echo $b <= $c,"<br>";

    ?>
    </div>
</body>
</html>