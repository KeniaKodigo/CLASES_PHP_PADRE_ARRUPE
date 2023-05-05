<?php
/**
 * en base a la seleccion del lugar turistico se aplicara un cierto descuento:
 * 
 * Costa del Sol => 10%
 * Las Palmeras => 15%
 * El pital => 5%
 * Termos del rio => no aplica descuento
 */

function descuento_lugar_turistico(){
    /**
     * variables magicas o globales = $_POST, $_GET, $_FILE
     * $_SERVER, $_SESSION
     */

    /** isset() => verifica los campos si estan vacios o no
     * empty() => verifica si algo esta vacio o no
     */

    if(isset($_POST['lugares'], $_POST['nombre'],$_POST['direccion'])){
        $lugar = $_POST['lugares'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        switch($lugar){
            case "Costa del Sol":
                echo "<h4 class='text-info'>$nombre</h4>";
                echo "<p><b>Direccion:</b> $direccion
                    Tu descuento es del 10%
                </p>";
                break;
            case "Las Palmeras":
                echo "<h4 class='text-info'>$nombre</h4>";
                echo "<p><b>Direccion:</b> $direccion
                    Tu descuento es del 15%
                </p>";
                break;
            case "El Pital":
                echo "<h4 class='text-info'>$nombre</h4>";
                echo "<p><b>Direccion:</b> $direccion
                    Tu descuento es del 5%
                </p>";
                break;
            case "Termos del rio":
                echo "<h4 class='text-info'>$nombre</h4>";
                echo "<p><b>Direccion:</b> $direccion
                    No aplica descuento
                </p>";
                break;
            default:
                echo "Seleccione un lugar turistico";
        }
    }
    
}

?>