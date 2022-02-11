<?php
//reverse palabras

$string = "Hello World";
$array = explode(" ", $string);
$rarray = array_reverse($array);

echo $newstring = implode(" ", $rarray);

//reverse letra por letra
echo "\n";

$string = "I am a boy";

$reversed = "";
$tmp = "";
for($i = 0; $i < strlen($string); $i++) {
    if($string[$i] == " ") {
        $reversed .= $tmp . " ";
        $tmp = "";
        continue;
    }
    $tmp = $string[$i] . $tmp;    
}
$reversed .= $tmp;

print $reversed . PHP_EOL;