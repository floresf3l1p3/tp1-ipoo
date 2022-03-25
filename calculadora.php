<?php
class calculadora
{
    //atributos
    private $numero1;
    private $numero2;
    //metodo constructor
    public function __construct($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }
    
    //metodos de acceso
    /**
     * Get the value of numero1
     */
    public function getNumero1()
    {
        return $this->numero1;
    }

    /**
     * Set the value of numero1
     *
     */
    public function setNumero1($numero1)
    {
        $this->numero1 = $numero1;
    }

    /**
     * Get the value of numero2
     */
    public function getNumero2()
    {
        return $this->numero2;
    }

    /**
     * Set the value of numero2
     *
     */
    public function setNumero2($numero2)
    {
        $this->numero2 = $numero2;
    }
    
    //funciones basicas de la calculadora
    /* public function __toString()
    {
        
        return "la suma es:\n".$this->suma();
    } */
      
    public function suma()
    {
        $suma =$this->getNumero1() + $this->getNumero2();
        return $suma;
    }
    public function resta()
    {
        $resta =$this->getNumero1() - $this->getNumero2();
        return $resta;
    }
    public function multiplicacion()
    {
        $multiplica =$this->getNumero1() * $this->getNumero2();
        return $multiplica;
    }
    public function dividir()
    {
        $dividir =$this->getNumero1() / $this->getNumero2();
        return $dividir;
    }
}
