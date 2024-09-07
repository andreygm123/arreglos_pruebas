<?php
$arreglo = array();
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
echo "El numero menor es" . "" . $nmenor;


?>