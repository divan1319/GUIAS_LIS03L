<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - GUIA 1</title>
    <link rel="stylesheet" href="css/htmlphp.css">
    <script src="js/modernizr.custom.lis.js"></script>
    <script src="js/prefixfree.min.js"></script>
</head>
<body>
    <div class="wrap">
        <header>
            <h1>Demostración de HTML y PHP</h1>
        </header>
    
    <section class="main">
        <article id="html">
            <div class="text">
                <p>
                    &lt;! DOCTYPE html&gt;<br>
                    &lt;html&gt;<br>
                </p>
                <p> Parte HTML normal.</p>
                <p>
                    &lt;/html&gt;<br>
                </p>
            </div>
            <div class="img">
                <img src="img/html5.png" alt="Logo HTML 5">
            </div>
        </article>
        <?php
        echo "<article id=\"php\">\n";
        echo "<div class=\"text\">";
        echo '<p> &lt; ?php <br>';
        echo '...<br>';
        echo 'Parte con PHP </p>';
        echo '<p>?&gt;</p>';
        echo '</div>';
        echo "<div class=\"img\">";
        echo "<img src=\"img/php.png\" alt=\"Logo PHP\"></img>";
        echo '</div>';
        echo "\n</article>\n";
        ?>
    </section>
    </div>
</body>
</html>