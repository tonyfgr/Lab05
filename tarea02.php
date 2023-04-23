<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $precioActual  =$_POST["precio"];
        $unidades = $_POST["unidades"];
        

        $nuevoPrecio = $precioActual-0.05*$precioActual;
        $importeCompra =$nuevoPrecio*$unidades;
        $descuento= 0.07*$importeCompra;
        $importePagar = $importeCompra-$descuento;
        $obsequio = 2*$unidades;

        echo "RESULTADOS: ", "<br><br/>";
        echo "Nuevo precio de gaseosa: ", $nuevoPrecio, "<br>";
        echo "El importe de la compra es: ", $importeCompra, "<br>";
        echo "El importe del descuento es: ", $descuento, "<br>";
        echo "El importe a pagar: ", $importePagar, "<br>";
        echo "Nro de caramelos de obsequio: ", $obsequio, "<br>";
    }
?>