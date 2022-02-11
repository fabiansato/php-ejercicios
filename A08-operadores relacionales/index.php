<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

var_dump( $a == $b);
var_dump( $a == $b2); // será true porque compara el contenido no import si uno es int y el otro es string
var_dump( $a === $b2); // será false porque si bien tienen el mismo contenido NO son el mismo tipo de variable
var_dump ( $a != $b);  //false porque NO son diferentes
var_dump ( $a != $b2);  //false porque NO son diferentes y NO compara tipos
var_dump ( $a !== $b2); //true porque SON diferentes y SI compara tipos
var_dump ( $c < $b); // false c es mayor que b
var_dump ( $c > $b); // verdadero c es mayor que b
var_dump ( $a >= $b); // verdadero a es mayor O igual que B son iguales entonces es true
var_dump ( $b <= $d); // false
var_dump ( 2 <=> 1); // te va a devolver 1 ya que el primer numero es mayor
var_dump ( 1 <=> 1); // te va a devolver 0 ya que son iguales
var_dump ( 1 <=> 2); // te va a devolver -1 porque el primer numero es menor
var_dump ( $a ?? $j);