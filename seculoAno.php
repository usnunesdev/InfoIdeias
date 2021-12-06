<?php

function seculoAno($ano){
  
  //inicializa $seculo
  $seculo = 0;
  
  //identifica tamanho do valor informado
  $tam = strlen($ano);
  
  //checando século do valor informado
  if($tam < 3)
    $seculo = 1;
  else if($ano % 100)
    $seculo = intval($ano/100)+1;
  else
    $seculo = intval($ano/100);
  
  echo 'Século '.$seculo;
}

seculoAno(2021);

?>
