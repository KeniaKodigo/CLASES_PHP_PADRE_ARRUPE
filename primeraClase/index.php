<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modulo Backend</h1>

    <?php
        //primer comentario
        /**
         * segundo comentario
         */
        #imprimiendo desde php
        echo "<h2>Nuevo Tema PHP</h2>";

        echo '<h2>Nuevo Tema PHP</h2>';
        #asignacion de variable
        $texto = "Hola!";
        echo "$texto, como estas?";
        echo "<br>";
        echo '$texto, como estas?';
        #TIPOS DE DATOS
        $cadena = "esto es un mensaje"; //string
        $numero = 5; //int
        $decimal = 20.3; //double
        $bool = false; //FALSE;
        $nulo = null;
        $dato; //undefined

        $arreglo1 = array("pera","uvas","manzana","fresas");
        $arreglo2 = ["pantalon",5,true,null,20.5];
        #asignacion de arreglo con llave y valor
        $arreglo3 = array("nombre" => "pedro", "apellido" => "sandoval","edad" => 30);

        /**
         * animal = {nombre: pancho, edad: 5}
         */

        #trabajando con objetos
        class Animal{
            //atributos del objeto
            public $nombre;
            public $edad;
        }

        //instanciamos la clase
        $animal = new Animal();
        $animal->nombre = "Pancho";
        $animal->edad = 5;

        #definiendo una constante
        define("PI",3.1416);
        echo PI;
        const DATO = false;
        echo DATO;
        define("PERSONAS", array("maria","juan","diego","carmen"));
        echo "<br>";
        //echo PERSONAS;

        #maneras de imprimir un arreglo o un objeto
        print_r(PERSONAS);
        echo "<br>";
        print_r($animal);
        echo "<br>";
        #imprime el tipo de datos de la variable o de la constante
        var_dump(PERSONAS);
        echo "<br>";
        var_dump($animal);
        echo "<br>";
        //trabajando con funciones
        function sumar($num1, $num2){
            return $num1 + $num2;
        }

        echo sumar("10",20);

        function mayorDeEdad($edad){
            if($edad >= 18){
                echo "<br>La persona es mayor de edad";
            }else{
                echo "<br>Eres menor de edad";
            }
        }

        mayorDeEdad(20);
    ?>
</body>
</html>