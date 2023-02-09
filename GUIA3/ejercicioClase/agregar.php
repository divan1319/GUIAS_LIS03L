<?php

$data = simplexml_load_file('materias.xml');

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$uv = $_POST['uvs'];
$nota = $_POST['nota'];

$newMateria = $data->addChild('materia');
$newMateria->addChild('codigo', $codigo);
$newMateria->addChild('nombre', $nombre);
$newMateria->addChild('uvs', $uv);
$newMateria->addChild('nota', $nota);

$data->asXML('materias.xml');

header('Location: ./');


