<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $hijos  =$_POST["hijos"];
        $importetotal = $_POST["importetotal"];
        $sueldo_basico= 600;

        $bonificacion = $hijos* 50;
        $comision =$importetotal*0.075;
        $sueldo_bruto= $sueldo_basico + $comision+$bonificacion;
        $descuento = $sueldo_bruto*0.11;
        $sueldo_neto = $sueldo_bruto - $descuento;

        echo "RESULTADOS: ", "<br><br/>";
        echo "Su sueldo basico es de: ", $sueldo_basico, "<br>";
        echo "Su comision es de: ", $comision, "<br>";
        echo "Su bonificacion es de: ", $bonificacion, "<br>";
        echo "Su sueldo bruto es de: ", $sueldo_bruto, "<br>";
        echo "Su descuento es de: ", $descuento, "<br>";
        echo "Su sueldo neto es de: ", $sueldo_neto;
    }
?>