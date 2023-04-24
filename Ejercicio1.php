<?php
/**
 * Principio SOLID que está siendo violado: Single Responsibility
 * "cada clase es responsable de una sola tarea"
 */
class Employee{

    public function saveEmployee(){
    
        return "The employee's information has been saved successfully.";
    
    }
    
    public function connection(){
    
        return " The connection to the database was successful";
    
    }
    
    public function reportByDepartment($department){
    
        return "Information of all active employees in $department";
    
    }
    
}

/**
 * Solución aplicando el principio SOLID: Single Responsibility
 */

class Connection{

    public function connection(){    
        #code...
        return " The connection to the database was successful";
    }
}

class Employees{

    public function saveEmployee(){
        #code...
        return "The employee's information has been saved successfully.";
    }
}

class Report{

    public function reportByDepartment($department){    
        return "Information of all active employees in $department";    
    }
}
?>