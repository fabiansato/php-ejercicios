<?php
$michi_grande = true;
$le_gusta_comer = true;
$michi_volador = false;
$michi_con_dos_patas = false;

var_dump($michi_grande && $le_gusta_comer);  //true
-
var_dump($michi_grande or $michi_volador); //true

var_dump($michi_volador or $michi_con_dos_patas); //false

var_dump(!$le_gusta_comer); //false

var_dump(!$le_gusta_comer or $michi_grande); //true
