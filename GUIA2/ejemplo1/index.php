<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bisiesto.css">
    <link rel="stylesheet" href="css/formstyle.css">
    <script src="js/validatedata.js"></script>
    <script src="js/prefixfree.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php if (!isset($_POST['enviar'])) {
            ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" name="frmdatos">
            <h2 class="contact">Años Bisiestos</h2>
                <span class="contact">
                    <label for="txtdato">Probar año:</label>&nbsp;&nbsp;
                </span>
                <input type="text" name="year" id="year" maxlenght="20" placeholder="Ingrese un año"><br>
                <span id="numbersOnly">
                    Ingrese números enteros
                </span>
                <input type="submit" name="enviar" id="enviar" value="Probar">
        </form>
        <?php } else {
            $year=isset($_POST['year']) ? $_POST['year'] : 0;
            if(($year%4 ==0 && $year%100!= 0) || ($year%400 == 0)) {
                ?>
                <p class="bisiesto">
                    <span style="color:green;font:bold 10pt 'Lucida Sans;'">El Año <?php echo $year?> es Bisiesto</span>
                    <span style="color:green;font:bold 10pt 'Lucida Sans;'"><a href="<?php $_SERVER['PHP_SELF']; ?>">Probar otro año</a></span>
                </p>
        <?php
            }else{
                ?>
                <p class="bisiesto">
                    <span style="color:brown;font:bold 10pt 'Lucida Sans;'">El Año <?php echo $year?> no es Bisiesto</span>
                    <span style="color:green;font:bold 10pt 'Lucida Sans;'"><a href="<?php $_SERVER['PHP_SELF']; ?>">Probar otro año</a></span>
                </p>
        <?php }
        }?>
    </div>
</body>
</html>