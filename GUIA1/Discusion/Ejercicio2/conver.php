<?php

$amount = $_POST['amount'];

    if(empty($amount) ){
        echo json_encode(array('error'=>false));
    }else if(!is_numeric($amount)){
        echo json_encode(array('error'=>false));          
             
    }else if($amount < 0){
        echo json_encode(array('error'=>false));
    }else{
        //echo json_encode(array('success'=>true));
    $conver = $amount * 0.92;
    $final = round($conver, 2);
    echo json_encode(array('conv'=>$final, 'amount' =>$amount));
    }



