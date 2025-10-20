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
        $num2 = (count($arr)/2)-1;
        $mediana = ($arr[$num1]+$arr[$num2])/2;

    } else {
        $medianaIndice = (count($arr)-1)/2;
        $mediana = $arr[$medianaIndice];
    }
    $arrayAso["Mediana"] = $mediana;

    $repeticiones = array_count_values($arr);
    $mayor = max($repeticiones);
    $modaArray = array_keys($repeticiones, $mayor);
    $arrayAso["Moda"] = $modaArray[0];

    return $arrayAso;
}

// 3 
function analizarPalabras($texto):array{
    $arr = [
        "numPalabras" => 0,
        "larga" => "",
        "corta" => ""
    ];

    $palabras = explode(" ", $texto);
    $arr["numPalabras"] = count($palabras);
    $larga = "";
    $corta = "";
    $grande = 0; $peque = count(str_split($texto));
    for($i = 0; $i < count($palabras); $i++){
        if(strlen($palabras[$i]) < $peque){
            $peque = strlen($palabras[$i]);
            $corta = $palabras[$i];
        }

        if(strlen($palabras[$i]) > $grande){
            $grande = strlen($palabras[$i]);
            $larga = $palabras[$i];
        }
    }
    $arr["larga"] = $larga;
    $arr["corta"] = $corta;

    return $arr;
}

// 4

function convertTemperature(){
    
}