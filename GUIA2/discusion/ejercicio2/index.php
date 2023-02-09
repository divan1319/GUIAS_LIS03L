<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>CUM</title>
</head>

<body class="has-background-grey-lighter">
    <?php include('../../../components/menu.php') ?>
    <div class="container ">
        <form id="frmCum">
            <div class="box p p-4">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Nombre Completo:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                <input class="input is-rounded" type="text" name="nombreAlumno"
                                    placeholder="Ingrese su nombre..." id="nombreAlumno">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <?php for ($i = 1; $i <= 5; $i++) {
                    ?>
                    <div class="columns">
                        <div class="column is-three-fifths">
                            <label for="" class="label">Materia:</label>
                            <input type="text" class="input" name="materia<?php echo $i; ?>">
                        </div>
                        <div class="column iis-one-fifth">
                            <label for="" class="label">Nota:</label>
                            <input type="text" class="input" name="nota<?php echo $i; ?>">
                        </div>
                        <div class="column is-one-fifth">
                            <label for="" class="label">UV:</label>
                            <input type="text" class="input" name="uv<?php echo $i; ?>">
                            
                        </div>
                    </div>
                <?php
                } ?>
                <button class="button is-primary">Calcular C.U.M</button>
            </div>

        </form>
        <div id="mensaje" class="mt mt-5"></div>
        <div id="tabla" ></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function () {
            $('#frmCum').submit(function (event) {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: './cum.php',
                    data: $(this).serialize(),
                }).then(err => {
                    let mssgError = `<div class="notification is-danger"> <strong>Debe de ingresar su Nombre</strong> </div>`;
                    let mssgSuccess = `<div class="notification is-success"><h4 class="title is-4">Resultado</h4></div>`;
                    let nombre =$("#nombreAlumno").val()
                    let res = JSON.parse(err)
                    console.log(res["error"])
                    if (res["error"] == true) {
                        document.getElementById("mensaje").innerHTML = mssgError
                        document.getElementById("tabla").innerHTML = ''
                        $("#amount").val('')

                    } else {
                        $("#amount").val('')
                        document.getElementById("mensaje").innerHTML = mssgSuccess
                        document.getElementById("tabla").innerHTML = `<table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>CUM</th>
                            <th>UV máximas a cursar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>${nombre}</td>
                            <td>${res["cum"]}</td>
                            <td>${res["uv_allowed"]}</td>
                        </tr>
                    </tbody>
                </table>`
                    }
                }
                ).catch(error => {
                    let mssErrorServer = `<div class="notification is-danger">Debes de llenar los campos de <strong>Nota</strong> y <strong>UV</strong> correctamente </div>`;
                    if(error.status == 500){
                        document.getElementById("mensaje").innerHTML = mssErrorServer
                        document.getElementById("tabla").innerHTML = ''
                    }
                     
                })
            })
        });
    </script>
</body>

</html>