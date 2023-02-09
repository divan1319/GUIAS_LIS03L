<?php

$data = simplexml_load_file('materias.xml');
$cod = $_GET['cod'];
$i =0;
$index=-1;
foreach ($data as $materia) {

    if ($cod == $materia->codigo) {
        $index = $i;
        break;
    }
    $i++;
}
if($index >= 0){
    unset($data->materia[$index]);
}

//$data->asXML("materias.xml");
file_put_contents('materias.xml',$data->asXML());

header('Location: ./');
