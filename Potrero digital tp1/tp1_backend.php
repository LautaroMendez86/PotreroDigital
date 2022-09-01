<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
    <h1>Potrero Digital tp1 </h1>

    <section>
        <h2>Ejercicio 1:</h2>
        <p>Imprima por pantalla: “Hola mundo”.</p>

        <?php
    echo 'Hola mundo';
        ?>
    
    </section>

    <section>
        <h2>Ejercicio 2:</h2>
        <p>Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</p>

        <?php
            $mensaje = "Hola mundo";
            echo $mensaje;
        ?>
    </section>
    <section>
        <h2>Ejercicio 3:</h2>
        <p>Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
            entera y el resto de la división entera</p>

        <?php
            $numEntero1 = 66;
            $numEntero2 = 4;

            $suma = $numEntero1 + $numEntero2;
            $resta = $numEntero1 - $numEntero2;
            $multiplicacion = $numEntero1 * $numEntero2;
            $division = $numEntero1 / $numEntero2;
            $resto = $numEntero1 % $numEntero2;

            echo "Operacion: Suma : $numEntero1 + $numEntero2 = $suma";
            ?>
            <br>
        <?php
            echo "Operacion: Resta : $numEntero1 - $numEntero2 = $resta";
            ?>
            <br>
        <?php
            echo "Operacion: Multiplicacion : $numEntero1 * $numEntero2 = $multiplicacion";
            ?>
            <br>
        <?php
            echo "Operacion: Division : $numEntero1 / $numEntero2 = $division";
            ?>
            <br>
        <?php
            echo "Operacion: Resto de una division : $numEntero1 % $numEntero2 = $resto";
            ?>
    </section>
    <section>
        <h2>Ejercicio 4:</h2>
        <p> Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
            pantalla</p>

        <?php
            $temperaturaEnCelcius = 20;

            $temperaturaEnFahrenheit = ($temperaturaEnCelcius * 9/5) + 32;

            echo "Temperatura en Celcius: $temperaturaEnCelcius °C";
            ?>
            <br>
        <?php
            echo "Temperatura en Fahrenheit: $temperaturaEnFahrenheit °F"

        ?>
    </section>
    <section>
        <h2>Ejercicio 5:</h2>
        <p>Implementar algoritmos que permitan:</p>
            <ol>
                <li>Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</li>
                <li>Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</li>
            </ol>

        <?php
            $base = 18;
            $rectangulo = 12;

            $perimetro = ($base * 2) + ($rectangulo * 2);
            $area = $base * $rectangulo;

            echo "1. Perimetro del rectangulo: $perimetro cm";
        ?>
        <br>
            <?php

              
            echo "Area del rectangulo: $area cm";

        ?>
        <br>
        <br>
        <?php

            $radio = 30;
            $pi = 3.1416;

            $perimetroCirculo = 2 * $pi * $radio;
            $areaCirculo = $pi * $radio * $radio;

            echo "2. Perimetro del circulo: $perimetroCirculo cm";

        ?>
        <br>
        <?php
            echo "Area del circulo: $areaCirculo cm";
        ?>
    </section>

    
</main>
    

    
</body>
</html>