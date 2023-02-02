<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="css/salario.css">
    <link rel="stylesheet" href="css/links.css">
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
    <header id="inset">
        <h1>Detalle Salario</h1>
    </header>
    <section>
        <article>
            <?php if (isset($_POST['enviar'])) {

                $empleado = isset($_POST['empleado']) ? $_POST['empleado'] : '';
                $sueldobase = isset($_POST['sueldobase'])
                    ? $_POST['sueldobase']
                    : '';
                if (isset($_POST['hextra'])) {
                    $horasextras = isset($_POST['numhorasex'])
                        ? $_POST['numhorasex']
                        : 0;
                    $pagohextra = isset($_POST['pagohextra'])
                        ? $_POST['pagohextra']
                        : 0;
                    $sueldohextras = $horasextras * $pagohextra;
                } else {
                    $horasextras = 0;
                    $sueldohextras = 0;
                }
                $sueldoneto = $sueldobase + $sueldohextras;
                ?>
<div><h3>Boleta de pago</h3>
<table>
    <tr>
        <th colspan="2">Detalle del pago</th>
    </tr>
    <tr>
        <td>El empleado es:</td>
        <td class="detail"><?php echo $empleado;?></td>
    </tr>
    <tr>
        <td>El sueldo base es:</td>
        <td class="detail"><?php echo $sueldobase;?></td>
    </tr>
    <tr>
        <td>Las horas extras son: </td>
        <td class="detail"><?php echo $horasextras;?></td>
    </tr>
    <tr>
        <td>El pago por horas extras es:</td>
        <td class="detail"><?php echo $sueldohextras;?></td>
    </tr>
    <tr>
        <th>El sueldo neto devengado es: </th>
        <th class="number"><?php echo $sueldoneto;?></th>
    </tr>
</table>
</div>
<?php
            } ?>
            <a href="./" class="a-btn">
                <span class="a-btn-symbol">i</span>
                <span class="a-btn-text">Ingresar</span>
                <span class="a-btn-slide-text">otro empleado</span>
                <span class="a-btn-slide-icon"></span>
            </a>
        </article>
    </section>
</body>
</html>