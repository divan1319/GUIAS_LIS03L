<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USD to Euro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
<?php include('../../../components/menu.php'); ?>
    <div class="container is-max-desktop has-text-centered">
        <h3 class="title is-3 mt mt-5">Conversor USD to EUR</h3>
    </div>
    <form class="field has-addons has-addons-centered mt mt-6" id="formConver">
        <p class="control">
            <span class="select">
                <select disabled>
                    <option>$</option>
                </select>
            </span>
        </p>
        <p class="control">
            <input class="input" type="text" name="amount" id="amount" placeholder="Cantidad en dolares">
        </p>
        <p class="control">
            <button class="button is-primary" name="enviar">
                Convertir a Euro
            </button>
        </p>
    </form>
    <div class="container is-max-desktop has-text-centered mt mt-6">
        <div id="mensaje">

        </div>
        <div id="tabla"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function () {
            $('#formConver').submit(function (event) {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: './conver.php',
                    data: $(this).serialize(),
                }).then(err => {
                    let mssgError = `<div class="notification is-danger"> <strong>Esta ingresando una cantidad invalida</strong> </div>`;
                    let mssgSuccess = `<div class="notification is-success"><h4 class="title is-4">Resultado</h4></div>`;
                    let res = JSON.parse(err)
                    console.log(res["error"])
                    if (res["error"] == false) {
                        document.getElementById("mensaje").innerHTML = mssgError
                        document.getElementById("tabla").innerHTML = ''
                        $("#amount").val('')

                    } else {
                        $("#amount").val('')
                        document.getElementById("mensaje").innerHTML = mssgSuccess
                        document.getElementById("tabla").innerHTML = `<table class="table is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Cantidad</th>
                                    <th>Conversion a Euro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$${res["amount"]}</td>
                                    <td>€${res["conv"]}</td>
                                </tr>
                            </tbody>
                        </table>`
                    }
                }
                )
            })
        });
    </script>
</body>

</html>