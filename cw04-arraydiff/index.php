<?php
function arrayDiff($a, $b) {
    
    $result = array_diff($a, $b);
    $final = [];
     foreach ($result as &$valortemporal) {
       array_push($final, $valortemporal); // entonces manda el valor de i a pushearlo al array
     }
 
     return $final;
 
 //mas facil  solamente esta linea
//return array_values(array_diff($a, $b));
    }

  print_r (arrayDiff([1,2], [1]));
