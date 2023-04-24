<?php

/**
 * Principio SOLID que está siendo violado: Open - Closed
 * "cada clase es responsable de una sola tarea"
 */

class Transferencia{

    public function tipoPago($tipo, $cantidad){
    
        if($tipo == "tarjetaCredito"){
        
            return "Usted va pagar $$cantidad con tarjeta de credito";
        
        }
    
        if($tipo == "payPal"){
        
            return "Usted va pagar $$cantidad por medio de PayPal";
        
        }
    
    }
    
}

/**
 * Solución aplicando el principio SOLID: Open - Closed
 */

interface Tipo_pago{
    public function transferencia($cantidad);
}

class Tarjeta_credito implements Tipo_pago{
    public function transferencia($cantidad){
        return "Usted está pagando $$cantidad con tarjeta de credito";
    }
}

class Paypal implements Tipo_pago{
    public function transferencia($cantidad){
        return "Usted está pagando $$cantidad con una cuenta de Paypal";
    }
}

//Implementando otros métodos de pago

class Tarjeta_debito implements Tipo_pago{
    public function transferencia($cantidad){
        return "Usted está pagando $$cantidad con tarjeta de débitp";
    }
}

class Bitcoin implements Tipo_pago{
    public function transferencia($cantidad){
        return "Usted está pagando $$cantidad con bitcoins";
    }
}
?>