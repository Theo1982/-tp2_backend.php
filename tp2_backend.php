<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ejercicios</h1>
    
     <?php  
       $n = 1;
       if ($n > 0) {
        echo "El numero es positivo";
       }
     ?> 
     <br>
     <hr>
     <?php  
       $n = 3;
       if ($n > 1 && $n < 10) {
        echo "El numero ingresado es mayor a 1 y menor a 10";
       }
     ?> 
     <br>
     <hr>
     <?php  
       $n = 1;
       if ($n > 10 || $n < 2) {
        echo "El numero ingresado es mayor a 10 o menor a 2";
       }
     ?>
     <br>
     <hr>
      <?php 
       $numero1 = 3;
       $numero2 = 3;
       
       if ($numero1 > $numero2) {
        echo "Suma: ";
        echo $numero1 +  $numero2;
        echo "<br>";
        echo "Resta: ";
        echo $numero1 -  $numero2;
       } elseif ($numero2 > $numero1) {
        echo "Multiplicacion: ";
        echo $numero1 *  $numero2;
        echo "<br>";
        echo "Division: ";
        echo $numero1 /  $numero2;
        echo "<br>";
        echo "Resto: ";
        echo $numero1 % $numero2;
       } else {
        echo "Los numeros ingresados son iguales";
       }
               
     ?> 

</body>
</html>