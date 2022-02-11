<html>
<body>

<?php 
$segundos  = $_GET["segundos"]; 

$horas = (int) ($segundos / 3600); // solo deja enteros si son divisibles de 600 y lo convieret en int al final
$segundos = (int) ($segundos % 3600); 
$minutos = (int) ($segundos / 60); 
$segundos = (int) ($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos.";
?> 

</body>
</html> 