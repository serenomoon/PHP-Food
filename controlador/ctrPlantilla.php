<?php 

class Plantilla{

    static public function ctrPlantilla(){
        include "vista/plantilla.php";  
    }

    static public function ctrRuta(){
        return "http://localhost/PROYECTOSWEB/cursophpdesdecero/vista/recursos";
    }
}

?>