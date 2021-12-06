<?php

function primoInferior($num){
  //inicia divisores
  $divisores = 0;
  
  //se numero informado for negativo, apresenta 0
  if($num < 0){
    echo 0;
    exit;
  }
	
  //loop para percorrer números inferiores ao valor informado
  for($x = $num-1; $x > 0; $x--){
    //loop para identificar um primo
    for($y = 2; $y < $x; $y++)
     if($x % $y == 0)
      $divisores++;
    if($divisores == 0){
      echo $x;
      exit;
    }
    $divisores = 0;
  }
  echo 'Não encontrado número primo inferior';
}
primoInferior(12);

?>
