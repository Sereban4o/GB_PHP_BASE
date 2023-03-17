<?php

do {
    $answer = (int) readline("Введите число больше нуля");
} while (!$answer > 0);

switch ($answer % 8) {
    case 0:
    case 2:
        echo "2 палец";
        break;
    case 1:
        echo "1 палец";
        break;
    case 3:
    case 7:
        echo "3 палец";
        break;
    case 4:
    case 6:
        echo "4 палец";
        break;
    case 5:
        echo "5 палец";
        break;
    default:
        echo "Не нашел палец :)";
        break;
}