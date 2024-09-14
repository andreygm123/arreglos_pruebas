<?php
/*$arreglo = array();
$num = readline("Digite la cantidad de  numeros :");
$nmayor = 0;
$nmenor = 99999;
for ($i=0; $i < $num ; $i++) { 
    $numero = readline("Digita numeros: ");
    array_push($arreglo, $numero);
}
 for ($j=0; $j < count($arreglo) ; $j++) { 
    if ($arreglo[$j] > $nmayor) {
       $nmayor = $arreglo[$j] ;
    }elseif ($arreglo[$j] < $nmenor) {
        $nmenor = $arreglo[$j];
    }
 }
echo "El numero mayor es" . "" . $nmayor ;
echo "El numero menor es" . "" . $nmenor;*/

$arreglo = array();
$num = readline("Digite la cantidad de numero: ");
$positivo = 0;
$negativo = 0;
$cero = 0;

for ($i=0; $i < $num ; $i++) { 
    $numero = readline("Digita los numeros: ");
    array_push($arreglo, $numero);
}
  for ($j=0; $j <count($arreglo) ; $j++) { 
    if ($arreglo[$j] > 0) {
        $positivo++;
    }elseif ($arreglo[$j] < 0) {
        $negativo++;
    }else {
        $cero++;
    }
  }  
echo "Los numeros positivos son $positivo";
echo "Los numeros negatvios son $negativo";
echo "Los numeros ceros son $cero";






?>