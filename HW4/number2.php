<?php

$mass = array(4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2);


function calculation(array $a): array
{
    $total = [];
    $total['max'] =  max($a);
    $total['min'] =  min($a);
    $total['avg'] =  array_sum($a) / count($a);
    return $total;
};

$result = calculation($mass);
print_r($result);
