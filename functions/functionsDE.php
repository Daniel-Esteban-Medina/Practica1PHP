<?php

function filterByType( array $arr, $tipo): array{
    switch($tipo){

            //array.splice(indice, 1)
        case "par":
            for($i = 0; $i <= count($arr); $i++){
                if(($arr[$i] % 2) != 0){
                    //unset elimina
                    unset($arr[$i]);
                }
            }
        break;

        case "impar":
            for($i = 0; $i <= count($arr); $i++){
                if(($arr[$i] % 2) == 0){
                    unset($arr[$i]);
                }
            }
        break;

        case "primo":
            
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