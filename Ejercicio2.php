<?php

/**
 * Principio SOLID que está siendo violado: Liskov Substitution
 * "hacer una abstracción correcta para cada clase y poder utilizar todos los métodos necesarios."
 */

class Adultos {

    public function pago(){
    
        echo "Es mayor de edad puede pagar";
    
    }
    
}
    
class Kids extends Adulto{
    
    public function pago()
    
    {
    
        throw new Exception("el niño no puede pagar, porque es menor de edad");
    
    }
    
}

/**
 * Solución aplicando el principio SOLID: Liskov Substitution
 */

interface Mayor_edad{
    public function pago_obligatorio();
}

interface Menor_edad{
    public function libre_de_pago();
}

class Kid implements Menor_edad{
    public function libre_de_pago(){
        echo "El niño es menor de edad, no puede pagar";
    }
}

class Adulto implements Mayor_edad{
    public function pago_obligatorio(){
        echo "El adulto es mayor de edad, puede pagar";
    }
}
?>