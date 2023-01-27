<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximun-scale=1.0, minimum-scale=1.0">
    <title>Investigación Complementaria 1</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile"/>
    <link rel="stylesheet" href="css/tables.css"/>
</head>
<body>
    <section>
        <article>
            <div id="info">
                <table id="hor-zebra">
                    <caption>Funciones para determinar el tipo de dato</caption>
                        <thead>
                            <tr class="thead">
                            <th scope="col">Costante</th>
                            <th scope="col">Utilidad</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nboolval \n</td>\n";
                        echo "\t\t<td>\n" . 'Obtener el valor booleano de una variable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\ndebug_zval_dump\n</td>\n";
                        echo "\t\t<td>\n" . 'Vuelca a la salida una cadena con la representación de un valor interno de zend' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\ndoubleval\n</td>\n";
                        echo "\t\t<td>\n" . 'Alias de floatval' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nempty \n</td>\n";
                        echo "\t\t<td>\n" . 'Determina si una variable está vacía' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nfloatval\n</td>\n";
                        echo "\t\t<td>\n" . 'Obtener el valor flotante de una variable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\ngettype \n</td>\n";
                        echo "\t\t<td>\n" . 'Obtener el tipo de una variable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nget_defined_vars \n</td>\n";
                        echo "\t\t<td>\n" . 'Devuelve una matriz con todas las variables definidas' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr \nintval\n</td>\n";
                        echo "\t\t<td>\n" . 'Obtiene el valor entero de una variable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nis_array\n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si una variable es un array' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nis_bool \n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si una variable es de tipo booleano' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_callable\n</td>\n";
                        echo "\t\t<td>\n" . 'Verificar que los contenidos de una variable puedan ser llamados como una función' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_countable\n</td>\n";
                        echo "\t\t<td>\n" . 'Verifica que el contenido de una variable es un valor contable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_double\n</td>\n";
                        echo "\t\t<td>\n" . 'Alias de is_float' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_float\n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si el tipo de una variable es float' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_int\n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si el tipo de una variable es integer' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_integer\n</td>\n";
                        echo "\t\t<td>\n" . 'Alias de is_int' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_iterable\n</td>\n";
                        echo "\t\t<td>\n" . 'Verifica que el contenido de una variable es un valor iterable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_long \n</td>\n";
                        echo "\t\t<td>\n" . 'Alias de is_int' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_null\n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si una variable es null' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_numeric \n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si una variable es un número o un string numérico' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_object \n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si una variable es un objeto' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_real \n</td>\n";
                        echo "\t\t<td>\n" . 'Alias de is_float' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_resource\n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si una variable es un recurso' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_scalar \n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si una variable es escalar' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nis_string \n</td>\n";
                        echo "\t\t<td>\n" . 'Comprueba si una variable es de tipo string' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nisset \n</td>\n";
                        echo "\t\t<td>\n" . 'Determina si una variable está definida y no es null' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nprint_r\n</td>\n";
                        echo "\t\t<td>\n" . 'Imprime información legible para humanos sobre una variable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\niserialize\n</td>\n";
                        echo "\t\t<td>\n" . ' Genera una representación apta para el almacenamiento de un valor' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nsettype  \n</td>\n";
                        echo "\t\t<td>\n" . 'Establece el tipo de una variable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nstrval \n</td>\n";
                        echo "\t\t<td>\n" . ' Obtiene el valor de cadena de una variable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nunserialize \n</td>\n";
                        echo "\t\t<td>\n" . 'Crea un valor PHP a partir de una representación almacenada' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nunset \n</td>\n";
                        echo "\t\t<td>\n" . ' Destruye una o más variables especificadas' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nvar_dump \n</td>\n";
                        echo "\t\t<td>\n" . ' Muestra información sobre una variable' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nvar_export \n</td>\n";
                        echo "\t\t<td>\n" . 'Imprime o devuelve una representación string de una variable analizable' . "\n</td>\n";
                        echo "\t</tr>\n";
                       


                        ?>
                    </tbody>
                </table>
            </div>
        </article>
    </section>

    
</body>
</html>