<?php
 include_once "fecha.php";
$p= new fecha(05,07,2020);
echo "---------indica si el año ingresado es bisiesto--------------"."\n";
if ($p->bisiesto()){
    echo "es año bisiesto"."\n";
}else{
    echo "no es año bisiesto"."\n";
}
echo "---------Fecho en forma abrebiada--------------"."\n";
echo $p->fechaEscrita();
echo "---------Fecho en forma escrita--------------"."\n";
$p->incrementarDias(27);
echo $p;