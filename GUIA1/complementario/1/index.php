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
                    <caption>Constantes predefinidas</caption>
                        <thead>
                            <tr class="thead">
                            <th scope="col">Costante</th>
                            <th scope="col">Utilidad</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n__LINE__\n</td>\n";
                        echo "\t\t<td>\n" . 'Ruta completa y nombre del fichero con enlaces simbólicos resueltos' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n__FILE__\n</td>\n";
                        echo "\t\t<td>\n" . 'Ruta completa y nombre del fichero con enlaces simbólicos resueltos. ' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n__DIR__\n</td>\n";
                        echo "\t\t<td>\n" . 'irectorio del fichero. Si se utiliza dentro de un include, devolverá el directorio del fichero incluído. Esta constante es igual que dirname(__FILE__).' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n__FUNCTION__\n</td>\n";
                        echo "\t\t<td>\n" . 'Nombre de la función.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n__CLASS__\n</td>\n";
                        echo "\t\t<td>\n" . '	Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar).' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n__TRAIT__\n</td>\n";
                        echo "\t\t<td>\n" . '	El nombre del trait. El nombre del trait incluye el espacio de nombres en el que fue declarado (p.e.j. Foo\Bar).' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n__METHOD__\n</td>\n";
                        echo "\t\t<td>\n" . 'Nombre del método de la clase.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n__NAMESPACE__\n</td>\n";
                        echo "\t\t<td>\n" . 'Nombre del espacio de nombres actual.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nClassName::class\n</td>\n";
                        echo "\t\t<td>\n" . 'El nombre de clase completamente cualificado. Véase también ::class.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        ?>
                    </tbody>
                </table>
                <table id="hor-zebra">
                    <caption>Constantes para tratamiento de errores</caption>
                        <thead>
                            <tr class="thead">
                            <th scope="col">Costante</th>
                            <th scope="col">Utilidad</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n	E_ERROR (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Errores Fatales en tiempo de ejecución. Éstos indican errores que no se pueden recuperar, tales como un problema de asignación de memoria. La ejecución del script se interrumpe.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nE_WARNING (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Advertencias en tiempo de ejecución (errores no fatales). La ejecución del script no se interrumpe.	' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nE_PARSE (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Errores de análisis en tiempo de compilación. Los errores de análisis deberían ser generados únicamente por el analizador.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\n	E_NOTICE (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Avisos en tiempo de ejecución. Indican que el script encontró algo que podría señalar un error, pero que también podría ocurrir en el curso normal al ejecutar un script.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nE_CORE_ERROR (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Errores fatales que ocurren durante el arranque incial de PHP. Son como un E_ERROR, excepto que son generados por el núcleo de PHP.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nE_CORE_WARNING (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Advertencias (errores no fatales) que ocurren durante el arranque inicial de PHP. Son como un E_WARNING, excepto que son generados por el núcleo de PHP.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nE_COMPILE_ERROR (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Errores fatales en tiempo de compilación. Son como un E_ERROR, excepto que son generados por Motor de Script Zend.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nE_COMPILE_WARNING (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Advertencias en tiempo de compilación (errores no fatales). Son como un E_WARNING, excepto que son generados por Motor de Script Zend.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nE_USER_ERROR (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Mensaje de error generado por el usuario. Es como un E_ERROR, excepto que es generado por código de PHP mediante el uso de la función de PHP trigger_error().' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nE_USER_WARNING (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Mensaje de advertencia generado por el usuario. Es como un E_WARNING, excepto que es generado por código de PHP mediante el uso de la función de PHP trigger_error().' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nE_USER_NOTICE (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Mensaje de aviso generado por el usuario. Es como un E_NOTICE, excepto que es generado por código de PHP mediante el uso de la función de PHP trigger_error().' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nE_STRICT (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Habilítelo para que PHP sugiera cambios en su código, lo que asegurará la mejor interoperabilidad y compatibilidad con versiones posteriores de PHP de su código.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nE_RECOVERABLE_ERROR (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Error fatal capturable. Indica que ocurrió un error probablemente peligroso, pero no dejó al Motor en un estado inestable. Si no se captura el error mediante un gestor definido por el usuario (vea también set_error_handler()), la aplicación se abortará como si fuera un E_ERROR.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nE_DEPRECATED (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Avisos en tiempo de ejecución. Habilítelo para recibir avisos sobre código que no funcionará en futuras versiones.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nE_USER_DEPRECATED (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Mensajes de advertencia generados por el usuario. Son como un E_DEPRECATED, excepto que es generado por código de PHP mediante el uso de la función de PHP trigger_error().' . "\n</td>\n";
                        echo "\t</tr>\n";
                        echo "\t\t<td>\nE_ALL (integer)\n</td>\n";
                        echo "\t\t<td>\n" . 'Todos los errores y advertencias soportados, excepto del nivel E_STRICT antes de PHP 5.4.0.' . "\n</td>\n";
                        echo "\t</tr>\n";
                        ?>
                    </tbody>
                </table>
            </div>
        </article>
    </section>

    
</body>
</html>