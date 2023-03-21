<?php

$colio = (int)readline("Количество элементов в массиве");
$mass1 = [];
$mass2 = [];

for ($i = 0; $i <= $colio - 1; $i++) {
    $mass1[$i] = rand(1, 15);
    $mass2[$i] = rand(1, 15);
};

$totalMass = [];
for ($i = 0; $i < count($mass1); $i++) {
    $totalMass[$i] = $mass1[$i] * $mass2[$i];
};
print_r($totalMass);

/////////////////////////////////////////
$totalMass = [];
foreach ($mass1 as $key => $element) {
    $totalMass[$key] = $mass1[$key] * $mass2[$key];
}
print_r($totalMass);
