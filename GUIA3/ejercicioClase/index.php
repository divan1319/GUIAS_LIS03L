<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Calculadora de CUM</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th> 
                    <th>Uv</th>
                    <th>Notas</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                <?php
                $data = simplexml_load_file('materias.xml');
                $uv = 0;
                $notas = 0;
                foreach ($data as $materia) {

                    $notas += $materia->nota * $materia->uvs;
                    $uv += $materia->uvs;
                    ?>
                
                    <tr>
                        <td><?= $materia->codigo ?></td>
                        <td><?php echo $materia->nombre; ?></td>
                        <td><?php echo $materia->uvs; ?></td>
                        <td><?php echo $materia->nota; ?></td>
                        <td><a href="#delete_<?=$materia->codigo; ?>" data-toggle="modal" type="button" class="btn btn-danger">Eliminar</a><a href="#update_<?=$materia->codigo; ?>" data-toggle="modal" type="button" class="btn btn-primary">Editar</a></td>
                    </tr>
                <?php
                include('borrar_modal.php');
                include('actualizar_modal.php');
                }

                $cum = round($notas / $uv, 1);
                ?>
                </tbody>
            </table>
            <div class="card">

<div class="card-body">
  <blockquote class="blockquote mb-0">
    <p>Tu CUM es: <?php echo $cum; ?></p>
    
  </blockquote>
</div>
</div>       
        </div>
    </div>

</div>
<?php include 'nueva_modal.php'; ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>