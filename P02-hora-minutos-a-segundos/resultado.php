<html>
<body>

<?php 
$horas  = $_GET["horas"]; 
$minutos  = $_GET["minutos"]; 
$segundos  = $_GET["segundos"]; 

$totalsegundos = ($horas * 3600) + ($minutos * 60) + ($segundos);

echo "El total de segundos es $totalsegundos";
?> 

</body>
</html> 