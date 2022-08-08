<?php
$a = 90;
$b = 73;
$c = 32;

function math($a, $b, $c){
    if ($a > 0 && $b > 0 && $c > 0 && $b > $c) {
    return $k = (100 * 109.24 * $a) / ($b - $c) ** 3;
    }
    else {
        return NULL;
    }
}
echo ceil(math($a, $b, $c));
?>