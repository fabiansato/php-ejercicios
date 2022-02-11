<?php
function reverseWords($str) {

$reversed = "";
$tmp = "";
for($i = 0; $i < strlen($str); $i++) {
    if($str[$i] == " ") {
        $reversed .= $tmp . " ";
        $tmp = "";
        continue;
    }
    $tmp = $str[$i] . $tmp;    
}
$reversed .= $tmp;

return $reversed;
}

echo reverseWords('The quick brown fox jumps over the lazy dog.');

