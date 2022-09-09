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

    <h1>
        Potrero Ejercicio 2
    </h1>
    <section class='section'>
        <div class='container'>

            <p>1) Crear una variable n y validar que sea un número positivo.</p>

            <?php

$n = 10;

if($n >= 0){
    echo  "$n es positivo";
}else{
    echo "no es positivo";
}

?>

        </div>

        <div class='container'>

            <p>2) Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</p>

            <?php

$n = 5;

if ($n > 1 && $n < 10){
    echo  "$n es mayor que 1 y es menor que 10";
} elseif($n < 1){
    echo "$n es menor a 1";
} else{
    echo "$n no es menor que el numero 10";
}

?>

        </div>

        <div class='container'>

            <p>3) Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</p>

            <?php

$n = 11;

if($n > 10){
    echo "$n es mayor que un 10";
} elseif($n < 2){
    echo "$n es menor a un 2";
} else{
    echo "$n No es mayor que un 10, ni tampoco menor que un 2";
}

?>

        </div>

        <div class='container'>

            <p>4) Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
                mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
                mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
                numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</p>

            <?php

$numero1 = 10;
$numero2 = 20;

if($numero1 > $numero2){
    echo "$numero1 + $numero2 = ";
    echo $numero1+$numero2;
    print "<br>$numero1 - $numero2 = ";
    echo $numero1-$numero2;
} elseif($numero2 > $numero1){
        echo "$numero2 x $numero1 = ";
        echo $numero2*$numero1;
        print "<br>$numero2 / $numero1 = ";
        echo round($numero2/$numero1);
        print "<br>$numero2 % $numero1 = ";
        echo $numero2%$numero1;
} else{
        echo "Los numeros $numero1 y $numero2 son iguales";
}

?>

        </div>



    </section>

</body>

</html>