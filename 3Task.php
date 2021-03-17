<?php
$arr = array(-3, 4, 5, 6, 7, 8, 9, -53);
$posNegativ = 0;
$posFirstPositiv = 0;
$buff = 0;
for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i] < 0)
    {
        $posNegativ = $i;
        $buff = $arr[$i];
    }
}
for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i] > 0){
        $posFirstPositiv = $i;
        break;
    }
}

$arr[$posNegativ] = $arr[$posFirstPositiv];
$arr[$posFirstPositiv] = $buff;

foreach ($arr as $item) {
    echo $item . " ";
}