<?php
$data = simplexml_load_file('materias.xml');

$cod = $_POST['cod'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$uv = $_POST['uvs'];
$nota = $_POST['nota'];


$i = 0;
$index = -1;
foreach ($data as $materia) {

    if ($cod == $materia->codigo) {
        $index = $i;
        break;
    }
    $i++;
}
if ($index >= 0) {
    unset($data->materia[$index]);
}

if($data->asXML('materias.xml')){
    $newMateria = $data->addChild('materia');
    $newMateria->addChild('codigo', $cod);
    $newMateria->addChild('nombre', $nombre);
    $newMateria->addChild('uvs', $uv);
    $newMateria->addChild('nota', $nota);
    $data->asXML('materias.xml');
    header('Location: ./');
}






