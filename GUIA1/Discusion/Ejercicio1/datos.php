<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <div class="container is-max-desktop">
        <?php
        $name = $_POST['name'];
        $born = $_POST['born'];
        $carnet = $_POST['carnet'];
        $edad = $_POST['edad'];
        $foreign = $_POST['pais'];

        if (isset($foreign)) {

            if (empty($name) || empty($born) || empty($carnet) || empty($edad) || empty($foreign)) {
                ?>
                <article class="message is-danger" style="margin-top: 50px;">
                    <div class="message-header">
                        <p>Error</p>

                    </div>
                    <div class="message-body">
                        No puede mandar datos vacios
                    </div>
                </article>
            <?php
            } else {
                ?>
                <h2 style="margin-top: 50px;" class="title is-2">Mi Informacion</h2>
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Lugar de Nacimiento</th>
                            <th>Pais</th>
                            <th>Carnet</th>
                            <th>Edad</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $name; ?>
                            </td>
                            <td>
                                <?php echo $born; ?>
                            </td>
                            <td>
                                <?php echo $foreign; ?>
                            </td>
                            <td>
                                <?php echo $carnet; ?>
                            </td>
                            <td>
                                <?php echo $edad; ?>
                            </td>

                        </tr>
                    </tbody>
                </table>
                <article class="message is-info">
                    <div class="message-header">
                        <p>Info</p>

                    </div>
                    <div class="message-body">
                        <strong>Perfecto, todos los datos han sido enviados.</strong>
                    </div>
                </article>
            <?php
            }
        } else {
            if (empty($name) || empty($born) || empty($carnet) || empty($edad)) {
                ?>
                <article class="message is-danger" style="margin-top: 50px;">
                    <div class="message-header">
                        <p>Error</p>

                    </div>
                    <div class="message-body">
                        No puede mandar datos vacios
                    </div>
                </article>
            <?php
            } else {
                ?>
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Lugar de Nacimiento</th>
                            <th>Carnet</th>
                            <th>Edad</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $name; ?>
                            </td>
                            <td>
                                <?php echo $born; ?>
                            </td>
                            <td>
                                <?php echo $carnet; ?>
                            </td>
                            <td>
                                <?php echo $edad; ?>
                            </td>

                        </tr>
                    </tbody>
                </table>
                <article class="message is-info">
                    <div class="message-header">
                        <p>Info</p>

                    </div>
                    <div class="message-body">
                        <strong>Perfecto, todos los datos han sido enviados.</strong>
                    </div>
                </article>
            <?php
            }
        }
        ?>
        <button class="button is-primary"> <a href="./">Regresar</a> </button>
    </div>
</body>

</html>