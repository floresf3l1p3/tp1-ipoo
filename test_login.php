<?php

include_once "login.php";

$usuario = new Login("felipe",2345,"papazulu");
echo "prueba\n";

echo $usuario->getUsuario() ;
echo $usuario->getContrasenia()."\n";
echo "lo siguiente es la frase \n";
echo $usuario->getFrase()."\n";

echo "\n";
echo "--------!------- \n";
echo "\n";

echo " Primer cambio de contraseña \n"; 
echo $usuario->cambiarContraseña();
echo "Contraseña actual: ".$usuario->getContrasenia(). "\n";
echo $usuario->getContrasenia1()."\n";
echo "lo siguiente es la frase \n";
echo $usuario->getFrase()."\n";

echo "\n";
echo "--------!------- \n";
echo "\n";

echo " Segundo cambio de contraseña \n"; 
echo $usuario->cambiarContraseña();
echo "Contraseña actual: ". $usuario->getContrasenia(). "\n";
echo $usuario->getContrasenia1()."\n";
echo $usuario->getContrasenia2(). "\n";
