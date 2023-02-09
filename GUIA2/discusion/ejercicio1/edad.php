<!DOCTYPE html>
<html lang="en">
<head>
<title>Comparar números</title>
    <meta charset="UTF-8"/>
    <link rel="http://fonts.googleapis.com/css?family=Muli" href="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/formstyle.css"/>
    <script src="js/prefixfree.min.js"></script>
</head>
<body>
    <header>
        <h1>La fecha ingresada es: 
            <?php echo $num1 = isset($_POST['numero1'])? $_POST['numero1']: 0," -"; ?>
            <?php echo $num2 = isset($_POST['numero2'])? $_POST['numero2']: 0," -"; ?>
            <?php echo $num3 = isset($_POST['numero3'])? $_POST['numero3']: 0; ?>
        </h1>
    </header>
    <section>
        <article>
            <p class="msg">
            <?php
            $dia = date("d");
            $mes = date("m");
            $anio = date("Y");
            /*
            $fechatt= new DateTime("$num3/$num2/$num1");
            $fechatt2 = new DateTime(date('Y/m/d'));
            print_r($fechatt);
            print_r($fechatt2);
            $diff = $fechatt->diff($fechatt2);
            echo "<br><br><br><br>";
            var_dump($diff);
            if ($num3 <= $anio && $num2 <= $mes){
                echo "true";
            }
            return; */
            if($num3 <= $anio && $num2<= $mes)
            {
                // Captura la fecha ingresada por el usuario
                $fecha1= new DateTime("$num3/$num2/$num1");
                // Captura la fecha del sistma
                $fecha2 = new DateTime(date('Y/m/d'));
                
                $diff = $fecha1->diff($fecha2);

                    if($num2 == $mes && $num1 < $dia)
                    {
                        printf("segundo if");        
                    }else{
                        if(($diff->days)==0)
                        {
                            printf("tercer if");
                        }else{
                            echo $diff->days -1 .' dias vividos';
                        }
                       

                    }
            }
            else {
                printf("primer if");
            }

            ?>
            </p>
        </article>
    </section>
</body>
</html>