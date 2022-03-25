<?php
include_once "calculadora.php";

$objCalculadora= new calculadora(2,3);

echo $objCalculadora->suma()."\n";
echo $objCalculadora->resta()."\n";
echo $objCalculadora->multiplicacion()."\n";
echo $objCalculadora->dividir()."\n";