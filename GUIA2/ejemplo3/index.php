<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="css/idioma.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <h1 class="emboss">Idioma del navegador</h1>
        </header>
        <section>
            <?php
            $es = "Hola";
            $en = "Hello";
            $de = "Hallo";
            $fr = "Bonjour";
            $it = "Ciao";
            $pt = "Olá";

            $completo = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
            $idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            ?>
            <p><?php echo $completo;
            echo "<br>"; echo $idioma?>
            </p>
            <?php
            if ($idioma == "es") {
                ?>
                <p class="msgOff">El Lenguaje que esta utilizando el navegador es Español <br>
                <?php echo $es?>
            </p>
            <?php 
            }else if ($idioma == "en") {
            ?><p class="msgOff">The Language is English: <br>
            <?php echo $en?>
        </p>
        <?php 
        }
        ?>

        </section>
    </div>
</body>
</html>