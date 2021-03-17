<?php
$arr = array(1, 2, 3, 3, 4, 5, -1, 5, 6, 7, -5, -6, 6, 7, 7, 9, 8);
$count = 0;
$sum = 0;
for ($i = 0; $i <= count($arr); $i++) {
    if ($arr[$i] > 0) {
        $count++;
    } else {
        break;
    }
}

for ($i = count($arr); $i >= 0; $i--) {
    if ($arr[$i] % 2 != 0)
        if ($arr[$i] > 0) {
            $sum = $sum + $arr[$i];
        } else
            break;
}

echo "Count = " . $count;
echo "<br>";
echo "Sum = " . $sum;


