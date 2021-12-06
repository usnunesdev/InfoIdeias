<?php
$array = [];
$tamArray = 20;

//preenchendo array com 20 números aleatórios no intervalo de 0 à 10
for($i=0; $i < $tamArray; $i++)
  $array[] = rand(0, 10);

//array auxiliar recebendo contagem de quantidade dos valores 
$auxArray = array_count_values($array);

//ordenando o array
arsort($auxArray);

//apresentando o array
echo 'Array sorteado = [';
foreach($array as $key => $arr)
  echo $arr.($key+1 == $tamArray ? '' : ',');
echo '] <br/>';

echo 'O número que mais se repete é o '.array_key_first($auxArray).'.';
echo '<br/>';
echo 'Ele se repete '.current($auxArray).' vezes.';

?>
