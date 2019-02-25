<?php
	$variable;

	$indice = 10;
	$multiplicando = 20;
	echo "<table border = 2>";

    //Le ponemos los titulos a las cabeceras de las columnas

    echo "<th> Tabla * </th>";
    echo "<th> X1 </th>";
    echo "<th> X2 </th>";
    echo "<th> X3 </th>";
    echo "<th> X4 </th>";
    echo "<th> X5 </th>";
    echo "<th> X6 </th>";
    echo "<th> X7 </th>";
    echo "<th> X8 </th>";
    echo "<th> X9 </th>";
    echo "<th> X10 </th>";

    for ($i=1; $i<=$multiplicando ; $i++) { 
    	# code...
            echo "<tr>";    

            //creamos el segundo bucle for que vaya calculando el contenido de cada columna

            //nombre de la fila

            echo "<td>";
            echo "<b>Tabla del ".$i."</b>";
            echo "</td>";

            for($j=1;$j<=$indice;$j++){

                //creamos una columna
                echo "<td>";
                //multiplicamos el "j" por la iteracion en la que estemos "i" de la tabla de multiplicar
                echo $j*$i;
                echo "</td>";

            }

            //cerramos la etiqueta tr
            echo "</tr>";

    }
    echo "</table>";

?>