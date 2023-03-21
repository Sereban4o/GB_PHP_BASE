<?php

do {
    $number = readline("Введите количество поздравлений (от 2 до 4).");
} while (!in_array($number, range(2, 4)));

$wishes = [
    'счастья',
    'здоровья',
    'любви',
    'радости'
];
$epithets = [
    'бесконечного',
    'крепкого',
    'большого',
    'легендарного',
];

$name = readline("Напишит Ваше имя.");

$wishes_rand = array_rand($wishes, $number);
$epithets_rand = array_rand($epithets, $number);

$total_congratulations = [];
for ($i = 0; $i < $number; $i++) {
    $congratulations = [];
    $congratulations[] = $epithets[$epithets_rand[$i]];
    $congratulations[] = $wishes[$wishes_rand[$i]];

    $total_congratulations[$i] = implode(" ", $congratulations);
};

$text = implode(", ", $total_congratulations);

$text = substr_replace($text, " и", strripos($text, ","), 1);

echo "Дорогой {$name}, от всего сердца поздравляю тебя с днем рождения, желаю {$text}!";
