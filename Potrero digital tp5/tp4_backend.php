<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<main>
    <h1>Potrero Digital tp1 </h1>

    <section>
        <h2>Ejercicio 1:</h2>
        <p>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro</p>

        <?php

        $array = [0,2,4,6,8,10,12,14,16,18];

        foreach($array as $numero){
            print "<h4>$numero</h4>\n";
        }

        ?>
    
    </section>

    <section>
        <h2>Ejercicio 2:</h2>
        <p>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la 
        matriz. Mostrar el esquema del array con print_r().</p>

        <?php

        $array = ["Pedro", "Ana", 34, 1];

        print_r($array)
      
        ?>
    </section>
    <section>
        <h2>Ejercicio 3:</h2>
        <p>Crear un array asociativo e introducir los siguientes valores:<br>
                Nombre: Pedro <br>
                Apellido: Torres<br>
                Dirección: Av. Mayor 3703<br>
                Teléfono: 1122334455
        </p>

        

        <?php
        
        $array = ['Nombre' => "Pedro", 'Apellido' => "Torres", 'Direccion' => "Av. Mayor 3703", 'Telefono' => "1122334455"];

       
            ?>
    </section>
    <section>
        <h2>Ejercicio 4:</h2>
        <p> Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y 
            Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. 
            Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</p>

        
        <?php
        
        $array = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
        $index = 0;

        foreach ($array as $ciudad) {
            print "<h4> El indice: $index corresponde a la ciudad de: $ciudad.</h4>";
            $index++;
        }


            ?>
     
    </section>
    <section>
        
        <h2>Ejercicio 5:</h2>
        <p>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, 
            LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. 
            Ejemplo: El índice de Madrid es MD</p>
    

        <?php
        $array = ['Madrid' => "MD", 'Barcelona' => "BCL", 'Londres' => "LD", 'New York' => "NY", 'Los Ángeles' => "LA", 'Chicago' => "CCG"];

        foreach ($array as $ciudad => $value) {
            
            print "<h4>El indice: $value corresponde a la ciudad de: $ciudad.</h4>";

        }
            ?>
   
        
    </section>    
</main>
</body>
</html>