<?php

/**
 * POO: Es un estilo de la programacion que se basa en objetos de la vida real donde asignamos atributos y acciones (metodos)
 * 
 * Pilares de POO: Abstraccion, Encapsulamiento, Herencia y Polimofismo
 */

class Doctor{
    //nombre, apellido, direccion, telefono, especialidad
    public $nombre;
    public $apellido;
    protected $direccion;
    public $telefono;
    private $especialidad;

    //diagnostica, crear recetas, revisar perfil de pacientes
    public function crearRecetas(){
        //code..
    }

    public function horarioCitas(){
        //code..
    }
}

/** instancia */
$doctor = new Doctor();
$doctor->nombre = "Felipe";
//$doctor->direccion = "Santa Tecla";

?>