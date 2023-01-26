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
<?php include('../../../components/menu.php'); ?>
<br><br>
    <div class="container is-max-desktop">
        <form method="POST" action="datos.php" name="formDatos">
            <div class="field">
                <label class="label">Nombre Completo</label>
                <div class="control">
                    <input class="input" name="name" type="text" placeholder="Juan Perez">
                </div>

            </div>
            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="foreign" onclick="checkedInout()">
                        Soy Extranjero
                    </label>
                </div>
            </div>
            <div class="field">
                <label class="label">Lugar de Nacimiento</label>
                <div class="control" id="pais"></div>
                <div class="control">
                    <input class="input " name="born" type="text" placeholder="Departamento">
                </div>
            </div>

            <div class="field">
                <label class="label">Carnet</label>
                <div class="control">
                    <input class="input is-rounded" name="carnet" type="text" placeholder="XX000000">

                </div>

            </div>

            <div class="field">
                <label class="label">Edad</label>
                <div class="control">
                    <div class="select">
                        <select name="edad">
                            <option value="0">Seleccione su edad</option>
                            <?php
                            for ($i = 17; $i <= 100; $i++) {
                                echo "<option value='" . $i . "'>" . $i . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    
    <script>
        const checkedInout = () => {
            let is_foreign = document.formDatos.foreign.checked
            let pais = "<input class='input' name='pais' type='text' placeholder='Pais'> <br><br>"
            if (is_foreign == true) {
                document.getElementById("pais").innerHTML = pais
            }else{
                document.getElementById("pais").innerHTML = ""
            }

        }
    </script>
</body>

</html>