<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01 -Operaciones den PHP</title>
</head>
<body>
    <form  method="post" action="">
        Ingresar Valor 1: <br> <input type="text" name="valor1"><br>
        Ingresar Valor 2: <br> <input type="text" name="valor2"><br>
        Resultado : <br>
        <input type="submit" name="Suma" value="Suma">
    </form>

<?php
//declaracion de variables
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];
        $suma=$numero1 + $numero2;
        echo "El Resultado de la suma es : " .$suma;
?>
</body>
</html>