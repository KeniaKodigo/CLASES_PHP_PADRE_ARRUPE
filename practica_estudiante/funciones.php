<?php
/**
 * 
* Estudiante va ingresar nota de examen (0.2)
* - nota de la tarea (0.4)
* - nota de la asistencia (0.10)
* - nota de investigacion (0.30)
 */

function calcularNotaGlobal(){
    //isset()
    if(isset($_POST['estudiante'], $_POST['asistencia'], $_POST['examen'], $_POST['tareas'], $_POST['investigacion'])){

        $nota_asistencia = intval($_POST['asistencia']) *  0.10;
        $nota_examen = $_POST['examen'] * 0.20;
        $nota_tarea = $_POST['tareas'] *0.40;
        $nota_investigacion = $_POST['investigacion'] * 0.30;
        $nota_global = $nota_asistencia + $nota_examen + $nota_tarea + $nota_investigacion;

        $tabla = "";
        $tabla .= "<tr>";
            $tabla .= "<td>".$_POST['estudiante']."</td>";
            $tabla .= "<td>".$_POST['asistencia']."</td>";
            $tabla .= "<td>".$_POST['examen']."</td>";
            $tabla .= "<td>".$_POST['tareas']."</td>";
            $tabla .= "<td>".$_POST['investigacion']."</td>";
            $tabla .= "<td>".$nota_global."</td>";
        $tabla .= "</tr>";
        echo $tabla;
    }
}

?>