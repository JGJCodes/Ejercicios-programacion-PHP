<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form>
            <select name="Estados">
                <?php
                $estados = array(
                    'ags'=>'Aguascalientes',
                    'bjc'=>'Baja California',
                    'bjcs'=>'Baja California Sur',
                    'cam'=>'Campeche',
                    'coa'=>'Coahuila',
                    'col'=>'Colima',
                    'chi'=>'Chiapas',
                    'chia'=>'Chihuahua',
                    'dife'=>'Distrito Federal',
                    'dur'=>'Durango',
                    'guan'=>'Guanajuato',
                    'gue'=>'Guerrero',
                    'hid'=>'Hidalgo',
                    'jal'=>'Jalisco',
                    'mex'=>'México',
                    'mich'=>'Michoacán',
                    'mor'=>'Morelos',
                    'nay'=>'Nayarit',
                    'nuele'=>'Nuevo León',
                    'oax'=>'Oaxaca',
                    'pue'=>'Puebla',
                    'que'=>'Querétaro',
                    'quiro'=>'Quintana Roo',
                    'salupo'=>'San Luis Potosí',
                    'sin'=>'Sinaloa',
                    'son'=>'Sonora',
                    'tab'=>'Tabasco',
                    'tam'=>'Tamaulipas',
                    'tlax'=>'Tlaxcala',
                    'ver'=>'Veracruz',
                    'yuc'=>'Yucatán',
                    'zac'=>'Zacatecas',
                );
                foreach($estados as $indice => $valor){
                    echo '<option value='."$indice".'>'."$valor".'</option>';
                }
                ?>
            </select>
        </form>
        
        <h1>Los estados de la republica son:</h1>
        <?php 
            $est=implode(', ', $estados);
            echo "<p>$est</p>";
        ?>
    </body>
</html>
