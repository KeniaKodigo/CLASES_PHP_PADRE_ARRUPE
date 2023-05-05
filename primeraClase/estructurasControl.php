<?php

/**
 * Estructuras de control
 */

function operadorTernario($numero){
    //verificar si el numero esta entre 50 y 150
    echo $numero >= 50 && $numero <= 150 ? "Felicidades! Estas en el rango" : "No estas en el rango";
}
operadorTernario(63);

//if else if -else
echo "<br><p>¿Qué estacion del año te gusta?</p><br>";
function estacionAnio($estacion){
    if($estacion == "Otoño"){
        echo "Te gusta Otoño";
    }else if($estacion == "Primavera"){
        echo "Te gusta Primavera";
    }else if($estacion == "Invierno"){
        echo "Te gusta Invierno";
    }else if($estacion == "Verano"){
        echo "Te gusta Verano";
    }else{
        echo "Ingresa una estacion del año";
    }
}
estacionAnio("Invierno");

//switch
echo "<h6>Forma de Pago</h6>";
function formaPago($tipo, $cantidad){
    switch($tipo){
        case "Tarjeta":
            echo "Pagaras con tarjeta de credito, $" . $cantidad;
            break;
        case "PayPall":
            echo "Pagaras por medio de paypall, $" . $cantidad;
            break;
        case "Bitcoin":
            echo "Pagaras con bitcoin, $" . $cantidad;
            break;
        default:
            echo "Pagaras en efectivo, $" . $cantidad;
    }
}

formaPago("otro",150.75);

#Estructuras repetitivas

//for
$arreglo_numeros = [7,8,9,12,51,42];
$suma = 0;
//count() => verifica el tamaño de un arreglo
for($i = 0; $i < count($arreglo_numeros); $i++){
    $suma += $arreglo_numeros[$i]; //arreglo_numeros[1] = 8
}
echo "<br>";
echo "<strong>La suma de los numeros es $suma</strong>";
echo "<br>";
//while
$cadena = "Hola mundo";
//strlen() => verifica el tamaño de una cadena
$j = 0;
while($j < strlen($cadena)){
    echo $cadena[$j] . "<br>";
    $j++;
}

//do while & foreach
$k = strlen($cadena) - 1;
do{
    echo $cadena[$k];
    $k--;
}while($k >= 0);


//FOREACH
$arreglo = [25,8,7,6,23,5];
$suma = 0;
foreach($arreglo as $numero){
    $suma += $numero;
}
echo "<h3>La suma de los numeros es $suma</h3>";

?>