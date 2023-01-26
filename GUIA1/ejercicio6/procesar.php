
<?php
$cliente = $_POST['client'];
$producto=$_POST['product'];
$precio = $_POST['price'];
$cantidad = $_POST['quantity'];
$total = 0;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion Recibida</title>
    <link rel="stylesheet" href="css/tables.css">
    <script src="js/modernizr.custom.lis"></script>
</head>
<body>
    <section>
        <article>
            <div id="info">
            <table id="hor-zebra">
        <thead >
            <tr class="thead">
                <th scope="col">Campo</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd">
                <td>Cliente</td>
                <td><?php echo empty($cliente) ? "<a href='ingresodatos.html'>No ingreso el cliente</a>" :  $cliente ; ?></td>
            </tr>
            <tr>
                <td>Producto</td>
                <td><?php echo empty($producto) ? "<a href='ingresodatos.html'>No ingreso el producto</a>" : $producto ; ?></td>
            </tr>
            <tr class="odd">
                <td>Precio</td>
                <td><?php echo empty($precio) ? "<a href='ingresodatos.html'>No ingreso el precio</a>" :  $precio ; ?></td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td><?php echo empty($cantidad) ? "<a href='ingresodatos.html'>No ingreso el cantidad</a>" :  $cantidad ; ?></td>
            </tr>
            <tr class="odd">
                <td>Total a pagar:</td>
                <td><?php 
                    if(empty($cantidad) || empty($precio)) {
                        echo  "No hay nada que cobrar";
                    }else{
                        echo number_format($precio * $cantidad, 2 ,'.','.');
                    }
                    ?>
                    </td>
            </tr>
        </tbody>
    </table>
    <div id="link">
        <a href="ingresodatos.html" class="button-link">Ingresar nuevos datos</a>
    </div>
            </div>
        </article>
    </section>

</body>
</html>
