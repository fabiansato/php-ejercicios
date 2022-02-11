<?php
   function divisors($integer) {
  
    $intsdivisors = []; //declara un array vacio
    $prime = true; //usa el booleano como flag

    for ($i = 2; $i < $integer; $i++) { // empieza con i valor 2 hasta que sea el valor del entero 
        if ($integer % $i == 0){ // verifica si el modulo del valor ingresado es igual a 0
            array_push($intsdivisors, $i); // entonces manda el valor de i a pushearlo al array
            $prime = false; // el valor de prime es falso 
        }
    };

    if ($prime == true){ //si prime es verdadero entonces
        return "$integer is prime"; // muestra como que integer es primo
    }else{
        return $intsdivisors; // sino devuelve el array de divisores
    
    }

}

 print_r (divisors(12)); // testeamos con un numero para mostrar sus divisores
