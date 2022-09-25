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
        <p>Mostrar los números del 1 al 100.</p>

        <?php
    $numero = 1;

    while ($numero <= 100) {
        echo "$numero <br>";
        $numero++;
    }
        ?>
    
    </section>

    <section>
        <h2>Ejercicio 2:</h2>
        <p>Mostrar los números del 100 al 1.</p>

        <?php
            $numero = 100;
            
            while ($numero >= 1) {
                echo "$numero <br>";
                $numero--;
            }
        ?>
    </section>
    <section>
        <h2>Ejercicio 3:</h2>
        <p>Mostrar los números pares del 1 al 100.</p>

        <?php
        
        $numero = 1;

        while ($numero <= 100){
            if($numero % 2 == 0){
                echo "$numero <br>";
                $numero++;
            }else{
                $numero++;
            }
        }

            ?>
    </section>
    <section>
        <h2>Ejercicio 4:</h2>
        <p>Mostrar los números impares del 1 al 100.</p>

        
        <?php
        
        $numero = 1;

        while ($numero <= 100){
            if($numero % 2 == 0){
                $numero++;
            }else{
                echo "$numero <br>";
                $numero++;
            }
        }

            ?>
     
    </section>
    <section>
        <h2>Ejercicio 5:</h2>
        <p>Mostrar la suma de los números de 1 a 20.</p>

        <?php
        
        $numero = 1;
        $resultado = 0;

        while ($numero <= 20){
            $resultado = $numero + $resultado;
            $numero++;
           
        }
         echo "La suma de 1 al 20 es $resultado <br>" ;
            ?>
   
        
    </section>
    <section>
        <h2>Ejercicio 6:</h2>
        <p>Mostrar la suma de números pares de 1 a 20.</p>

        <?php
        
        $numero = 1;
        $resultado = 0;

        while ($numero <= 20){
           
            if($numero % 2 == 0){
                $resultado = $numero + $resultado;
            $numero++; 
            } else{
                $numero++;
            }
           
           
        }
         echo "La suma entre los numero pares del 1 al 20 es $resultado <br>" ;
            ?>
   
        
    </section>

    
</main>
    

    
</body>
</html>