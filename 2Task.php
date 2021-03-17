<?php
$arrA = array(1, 2, 3, 3, 4, 5, -1, 5, 6, 7, -5, -6, 6, 7, 7, 9, 8);
$sumElem = 0;
$arrB = array();

for ($i = 0; $i < count($arrA); $i++){
    $sumElem +=$arrA[$i];
    if ($i != 0)
        $arrB[$i] = intval($sumElem / $i);
    else
        $arrB[$i] = $sumElem;
}

foreach ($arrB as $item){
    echo $item . " ";
}