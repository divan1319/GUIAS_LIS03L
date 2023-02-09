<?php


//print_r($_POST);


$cum = 0;
$um = 0;
$uvs = 0;

if (!empty($_POST['nombreAlumno'])) {

    for ($j = 1; $j <= 5; $j++) {
        $um += $_POST['nota' . $j] * $_POST['uv' . $j];
    }
    for ($k = 1; $k <= 5; $k++) {
        $uvs += $_POST['uv' . $k];
    }

    $cum .= $um / $uvs;
    
    if ($cum >= 7.5) {
        echo json_encode(array("cum" => round($cum, 2), "uv_allowed" => 32));
    } elseif ($cum >= 7 && $cum < 7.5 ) {
        echo json_encode(array("cum" => round($cum, 2), "uv_allowed" => 24));
    } elseif ($cum >= 6 && $cum < 7 ) {
        echo json_encode(array("cum" => round($cum, 2), "uv_allowed" => 20));
    } elseif ($cum < 6.0) {
        echo json_encode(array("cum" => round($cum, 2), "uv_allowed" => 16));
    }
    //echo json_encode(array("cum" => round($cum, 2), "uv_allowed" => 32));
} else {
    echo json_encode(array("error" => true));
}