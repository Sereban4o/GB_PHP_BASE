<?php
$name = readline("Напишите Ваше имя.");
$allTime = 0;

do {
    $tasks = readline("Сколько заданий на сегодня у Вас запланировано?");
} while (!is_numeric($tasks));

for ($i = 1; $i <= $tasks; $i++) {

    ${"task$i"} = readline("Какая задача стоит перед вами сегодня?");

    do {
        ${"time$i"} = readline("Сколько примерно времени эта задача займет?");
    } while (!is_numeric(${"time$i"}));
}
;

echo "{$name}, сегодня у вас запланировано {$tasks} приоритетных задачи на день:" . PHP_EOL;

for ($i = 1; $i <= $tasks; $i++) {
    echo "-${"task$i"} (${"time$i"})ч" . PHP_EOL;
    $allTime = $allTime + ${"time$i"};
}
;

echo "Примерное время выполнения плана = {$allTime}ч";