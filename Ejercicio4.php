<?php

/**
 * Principio SOLID que está siendo violado: Segregation Interface
 * "podemos tener más de una interfaz para sí no tener métodos innecesarios."
 */

interface exportDocument{

    public function exportarPDF();
    
    public function exportarJSON();
    
    public function exportarText();
    
}
    
class BoletaPago implements exportDocument{
    
    public function exportarPDF()
    
    {
    
        return "Su boleta de pago esta en PDF";
    
    }
    
    public function exportarJSON()
    
    {
    
        throw new Exception("no se puede exportar en JSON");
    
    }
    
    public function exportarText()
    
    {
    
        throw new Exception("no se puede exportar en texto");
    
    }
    
}

/**
 * Solución aplicando el principio SOLID: Segregation Interface
 */

interface ExportarPDF{
    public function pdf();
}

interface ExportarJSON{
    public function json();
}

interface ExportarText{
    public function text();
}

//Implementando interfaces a distintas clases
class Boleta_Pago implements ExportarPDF{
    public function pdf(){
        return "Su boleta de pago está en PDF";
    }
}

class Factura implements ExportarJSON{
    public function json(){
        return "Su factura está en JSON";
    }
}

class Comprobante implements ExportarText{
    public function text(){
        return "Su factura está en formato text";
    }
}
?>