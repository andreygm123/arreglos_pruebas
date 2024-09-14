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

/*$arreglo = array();
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
echo "Los numeros ceros son $cero";*/

//hacer un algoritmo que digitados n cantidad de numeros, los guarde en una array y me haye lo siguiente
//1-numeros parse, suma de todos los numeros pares. 2-numeros impares, resta de numeros impares. 3-numeros negativos si hay, si no hya cero. 
//4-Si hay ceros y en que posicion se encuentra.


$arreglo = array();
$suma_pares = 0;
$resta_impares = 0;
$num_negativo = 0;
$ceros = 0;
$num_pares = array();
$num = readline("Digite la cantidad numeros: ");

for ($i=0; $i <$num; $i++) { 
    $numeros = readline("Digite los nuemros :");
    array_push($arreglo,$numeros);
}
    for ($j=0; $j <count($arreglo) ; $j++) { 
    
    if ($arreglo[$j] % 2 ==0) {
        $suma_pares += $arreglo[$j];
        array_push($num_pares, $arreglo[$j]);
    
    }elseif($arreglo[$j]) {
        $resta_impares -= $arreglo[$j];
    }
}
    for ($k=0; $k <$num ; $k++) { 
        if ($arreglo[$k] < 0) {
            $num_negativo ++;
    }elseif ($arreglo[$k] == 0) {
        echo"La posicion del cero es [$k]". "" . "\n";
    }
    
}    
echo "Los numeros pares son [$num_pares]". "" . "\n";
echo "La suma de los pares es $suma_pares". "" . "\n";
echo "Los numeros negativos son $num_negativo". "" . "\n";
echo "la resta de impares es $resta_impares". "" . "\n";

?>
