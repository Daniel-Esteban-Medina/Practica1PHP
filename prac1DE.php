<!DOCTYPE html>
<html lang="es">
    <head>
        <title>prac1DE</title>
        <link rel="stylesheet" href="styleDE.css">
    </head>
    <body>
        <h2>Ejercicio 1: Bucles anidados</h2>

        <?php
            $rows = 4 % 8 + 4;
            $columns = 5 % 6 + 5;
            echo "filas ".$rows."<br>columnas ".$columns."<br><br>";

            echo "Primera figura (rectángulo completo): <br>";
            for($i = 0; $i < $rows; $i++){
                for($j = 0; $j < $columns; $j++){
                    echo "*";
                }
                echo "<br>";
            }

            echo "Segunda figura (triángulo izquierdo): <br>";
            $tempColumns = 1;
            for($i = 0; $i < $rows; $i++){
                for($j = 0; $j < $tempColumns; $j++){
                    echo "*";
                }
                if($tempColumns <= $columns){
                    $tempColumns++;
                }
                echo "<br>";
            }

            echo "Tercera figura (marco): <br>";
            for($i = 0; $i < $rows; $i++){
                    if($i == 0 || $i == ($rows-1)){
                        for($j = 0; $j < $columns; $j++){
                            echo "*";
                        }
                    }else{
                        for($j = 0; $j < $columns; $j++){
                            if($j == 0 || $j == ($columns-1)){
                                echo "*";
                            } else {
                                echo '<span style="visibility:hidden;">*</span>';
                            }
                        }
                    }
                echo "<br>";
            }

            echo "Cuarta figura (tablero de ajedrez): <br>";
            $asterisco = true;
            for($i = 0; $i < $rows; $i++){
                for($j = 0; $j < $columns; $j++){
                    if($asterisco){
                        echo "*";
                        $asterisco = false;
                    } else {
                        echo '<span style="visibility:hidden;">*</span>';
                        $asterisco = true;
                    }
                }
                if($asterisco){
                    $asterisco = false;
                } else {
                    $asterisco = true;
                }
                echo "<br>";
            }
        ?>

        <h2>Ejercicio 2: Arrays bidimensionales</h2>

        <h3 id="cabeceraTabla">Temperaturas de ciudades por día (ºC)</h3>
        <?php
            $temps = array(
                array(0,0,0,0,0,0,0),
                array(0,0,0,0,0,0,0),
                array(0,0,0,0,0,0,0),
                array(0,0,0,0,0,0,0),
                array(0,0,0,0,0,0,0),
                array(0,0,0,0,0,0,0)
            );
            for($i = 0; $i < count($temps); $i++){
                for($j = 0; $j < count($temps[$i]); $j++){
                    $temps[$i][$j] = rand(-10,45);
                }
            }
            
            // SIN TERMINAR

        ?>

        <h2></h2>
    </body>
</html>