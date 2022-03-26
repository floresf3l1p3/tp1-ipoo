<?php
// ClASE login 
/*
clase Login que almacene el nombreUsuario, contraseña, frase que permite recordar la
contraseña ingresada y las ultimas 4 contraseñas utilizadas. Implementar un método que permita validar
una contraseña con la almacenada y un método para cambiar la contraseña actual por otra nueva, el
sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es decir no se
encuentra dentro de las cuatro almacenadas). 

*/
class Login {

private $usuario ;
private $contrasenia ;
private $contrasenia1 ;
private $contrasenia2 ;
private $contrasenia3 ;
private $frase ;
//private $almacenDeContraseñas ; //el Array donde se guardan las ultimas 4 contraseñas


public function __construct($usuario, $contrasenia, $frase) {
    $this -> usuario = $usuario ;
    $this-> contrasenia = $contrasenia;
    $this-> contrasenia1 = $contrasenia;
    $this-> contrasenia2 = $contrasenia;
    $this-> contrasenia3 = $contrasenia;
    $this-> frase = $frase;
    //$this-> almacenDeContraseñas= array() ;     
}

public function setUsuario($nombreUsuario) {
    $this->usuario = $nombreUsuario ;
}
public function getUsuario(){
    return $this->usuario;
}

//Get y Set de las contraseñas!
public function setContrasenia($contrasenia){
    $this->contrasenia = $contrasenia ;
}
public function getContrasenia(){
    return $this->contrasenia;
}

private function setContrasenia1($contrasenia){
    $this->contrasenia1 = $contrasenia ;
}
public function getContrasenia1(){
    return $this->contrasenia1;
}

private function setContrasenia2($contrasenia){
    $this->contrasenia2 = $contrasenia ;
}
public function getContrasenia2(){
    return $this->contrasenia2;
}

private function setContrasenia3($contrasenia){
    $this->contrasenia3 = $contrasenia ;
}
public function getContrasenia3(){
    return $this->contrasenia3;
}

public function setFrase($frase) {
    $this->frase = $frase;
}
public function getFrase(){
    return $this->frase;
}

/*
public function getAlmacenDeContraseñas(){
    return $this->almacenDeContraseñas;
}*/


public function verFrase(){
    echo "Frase: ". $this->getFrase() ."\n";
}

private function validar($contra){
    $x = false;
    if ($contra == $this->getContrasenia() || $contra== $this->getContrasenia1() || $contra== $this->getContrasenia2() || $contra== $this->getContrasenia3() ){
    echo "esta contraseña fue usada recientemente \n";
    $x = true;
    } else {
    $this->almacenarContrasenia($contra);
    echo "La contraseña fue guardada \n" ;
    echo "Ingrese una nueva frase para recordar la contraseña! \n";
    $nuevaFrase= trim(fgets(STDIN));
    $this->setFrase($nuevaFrase);

    }
return $x ;
}

private function almacenarContrasenia($contraseniaNueva){

    $this->setContrasenia3($this->getContrasenia2());
    $this->setContrasenia2($this->getContrasenia1());
    $this->setContrasenia1($this->getContrasenia());
    $this->setContrasenia($contraseniaNueva);
    
}


public function cambiarContraseña(){
do { 

    echo "Ingrese su nueva contraseña \n";
    $nuevaContra = trim(fgets(STDIN));
    $x= $this->validar($nuevaContra); 
    echo "\n";

} while($x == true);  

echo "su cambio de contraseña fue todo un exito \n";


}
}

/*
//Metodos
// recordar: da la frase para recordar la contra dado el usuario
public function recordar(){
   echo "frase: ".$this->getFrase() ."\n";
}

//validar contra con la almacenada

private function comparar($password){
    $i=0;
    $x= false;
    $n= count($this->almacenDeContraseñas);
    echo $n ;
        while($i < $n && $x = false){
        if ($password == $this->almacenDeContraseñas[$i]){
            $x = true;
        } 
        $i++;
    }
    return $x ;
}
public function verContraseñasAlmacenadas(){
$n= count($this->almacenDeContraseñas); 
for ($i=0; $i<$n;$i++){
    echo $this->almacenDeContraseñas[$i] ."\n";
}
}



private function agregarContrasenia($c){

    $cambio= $this->almacenDeContraseñas[1] ;
    $this->almacenDeContraseñas[2] = $cambio ;
}

//cambiar contraseña: cambia la actual por otra, pero esa actual no puede estar en el almacenamiento 
public function cambiarContrasenia(){   
    echo "ingrese la nueva contraseña \n";
    $nuevaContrasenia= trim(fgets(STDIN)) ;
    $x = $this->comparar($nuevaContrasenia);
    if ($x == false ){
        echo "La contraseña fue guardada correctamente, ingrese una frase para recordarla \n";
        $nuevaFrase = $this->setFrase(trim(fgets(STDIN)));
    } else {
        echo "Esta contraseña ya fue usada recientemente \n";
    }

}   */


