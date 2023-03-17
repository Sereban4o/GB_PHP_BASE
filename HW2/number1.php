<?php
while (true) {
    $answer = (int) readline("В каком году произошло крещение Руси?" . PHP_EOL . "  (Варианты: 810, 988 или 740 год.)");

    switch ($answer) {
        case 988:
            echo "Поздравляю, Вы назвали правильный ответ";
            break 2;
        case 810:
        case 740:
            echo "К сожалению Вы назвали неправильный ответ";
            break 2;
        default:
            break;
    }
}