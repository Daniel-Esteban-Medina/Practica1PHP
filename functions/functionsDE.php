<?php
// 1
function filterByType( array $arr, $tipo): array{
    switch($tipo){

        case "par":
            for($i = 0; $i < count($arr); $i++){
                if(($arr[$i] % 2) != 0){
                    unset($arr[$i]);
                }
            }
        break;

        case "impar":
            for($i = 0; $i < count($arr); $i++){
                if(($arr[$i] % 2) == 0){
                    unset($arr[$i]);
                }
            }
        break;

        case "primo":
            for($i = 0; $i < count($arr); $i++){
                $esPrimo = true;
                for($j = 2; $j < $arr[$i]; $j++){
                    if(($arr[$i] % $j) == 0){
                        $esPrimo = false;
                    }
                }
                if(!$esPrimo){
                    unset($arr[$i]);
                }
            }
        break;

        case "positivo":
            for($i = 0; $i <= count($arr); $i++){
                if($arr[$i] < 0){
                    unset($arr[$i]);
                }
            }
        break;

        case "negativo":
            for($i = 0; $i <= count($arr); $i++){
                if($arr[$i] >= 0){
                    unset($arr[$i]);
                }
            }
        break;
    }
    return $arr;
}

// 2

function calculateStatistics( array $arr): array{
    $arrayAso = [
        "Media" => 0,
        "Mediana" => 0,
        "Moda" => 0
    ];

    $media = 0;
    $mediana = 0;
    $medianaIndice = 0;
    for($i = 0; $i < count($arr); $i++){
        $media = $media + $arr[$i];
    }
    $arrayAso["Media"] = $media/count($arr);

    sort($arr);
    if((count($arr) % 2) == 0){
        $num1 = count($arr)/2;
        $num2 = (count($arr)/2)+1;
        $mediana = ($arr[$num1]+$arr[$num2])/2;

    } else {
        $medianaIndice = (count($arr)+1)/2;
        $mediana = $arr[$medianaIndice];
    }
    $arrayAso["Mediana"] = $mediana;


    return $arrayAso;
}

// 3 
function analizarPalabras($texto):array{
    $arr = [];
    $numLetras = 0;
    return $arr;
}