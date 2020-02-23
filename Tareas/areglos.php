<!DOCTYPE html>
<html>
    <head>
        <title>Arreglos</title>
        <meta charset="UTF-8"><link href="tabla.css" type="text/css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table>
            <caption>Arreglo escalar u ordinal</caption>
            <thead>
                <tr>
                    <td>Elemento del arreglo</td>
                    <td>Valor del elemento</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $ordinal= array(2, 5, 7, 16);
                for($i = 0; $i < 4; $i++){
			echo "<tr><td>" . $i . "</td> <td> " . $ordinal[$i] . "</td></tr><br/>";
		}
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Realizado por el alumno: Jorge Guzman Juarez<br/>Para la materia: Programación web</td>
                </tr>
            </tfoot>
        </table>
        <br/><table>
            <caption>Arreglo asociativo</caption>
            <thead>
                <tr>
                    <td>Elemento del arreglo</td>
                    <td>Valor del elemento</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $asocia= array(
                    "dia1"=>"Lunes",
                    "dia2"=> "Martes",
                    "dia3"=> "Miércoles",
                    "dia4"=> "Jueves", 
                    "dia5"=> "Viernes");
                foreach($asocia as $indice => $valor){
			echo "<tr><td>" . $indice . "</td> <td>" .  $asocia[$indice] . "</td></tr><br/>";
		}
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Realizado por el alumno: Jorge Guzman Juarez<br/>Para la materia: Programación web</td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>


