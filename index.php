<?php
$a = array(
    0 => array(
        0 => 'Sitti Nurmaipa deapati idris',
        1 => 95,
        2 => 135,
        3 => 188,
    ),
    1 => array(
        0 => 'maharani rahmah putri syafii',
        1 => 85,
        2 => 130,
        3 => 191,
    ),
    2 => array(
        0 => 'mohamad ferdiansyah palilati',
        1 => 75,
        2 => 135,
        3 => 191,
    ),
    3 => array(
        0 => 'meldi rumbay',
        1 => 135,
        2 => 188,
        3 => 188,
    ),
);

echo "<pre>";print_r($a);
$i = 1;
while($i<=3){
    $b = array_column($a, $i);
    rsort($b);
    print_r($b);
    $i++;
}
?>