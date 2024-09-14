$num = readline("Digite la cantida de estudiantes: ");
for ($i=1; $i <=$num ; $i++) { 
    $nota = readline("Digita la nota: ");
    if ($nota >=4 && $nota <=5){
        echo"Nota excelente $nota";
    }elseif ($nota>=3 && $nota <=3.9) {
        echo"Nota sobresaliente $nota";
    }elseif($nota >=0 && $nota<=3){
        echo"Nota reporbada $nota";
    }else {
        echo"digita otra nota";
    }
if($nota % 2==0){
    echo"La nota es par";
}else{
    echo"La nota es impar";
}
}

$num = readline("Digite la cantidad numeros: ");
array_push($arreglo,$numeros);
$numeros = readline("Digite los nuemros :");