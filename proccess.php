<?php

$c = $_POST["camisa"];
$p = $_POST["pantalon"];
$z = $_POST["   zapatos"];

$cantidad = ($c+$p+$z);

$totalSinDescuento = ($c*30000)+($p*45000)+($z*55000);

$descuento = $totalSinDescuento * 10/100;

$totalApagar = $totalSinDescuento - $descuento;

echo"la cantidad de productos a comprar es de: $cantidad";
echo"El descuento de la compra es de:$descuento";
echo"El total a pagar es de: $totalApagar";




?>