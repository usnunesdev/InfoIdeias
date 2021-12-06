<?php

function sequenciaCrescente($array){
    $truCase = true;
    $arrayAux = $array;
    $arrayAux2 = [];

    echo 'Array: [';
    foreach($array as $key => $arr){
        echo $arr.($key < count($array)-1 ? ', ' : ''); 
    }
    echo '] ';

    foreach($array as $key1 => $arr){          
        unset($arrayAux[$key1]);
        $y = 0;
        foreach($arrayAux as $arrAux){
            $arrayAux2[$y] = $arrAux;
            $y++;
        }

        foreach($arrayAux2 as $key => $arrAux){
            if(($key+1) < count($arrayAux2)){
                if($arrAux < $arrayAux2[$key+1]){
                    $truCase =  $truCase && true;
                    
                }else{
                    $truCase = $truCase && false;                    
                } 
            }else{
                if($arrAux > $arrayAux2[$key-1]){
                    $truCase = $truCase && true;                    
                }else{
                    $truCase = $truCase && false;
                } 
            }            
        }
        if($truCase){
            echo 'true';
            exit;
        }
            
        $truCase = true;
        $arrayAux = $array;
    }
    echo 'false';
}

sequenciaCrescente([1, 1]);
?>
