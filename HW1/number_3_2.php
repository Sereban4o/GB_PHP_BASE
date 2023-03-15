<?php
define("STR_QUESTION", "Какая задача стоит перед вами сегодня?");
define("STR_TIME", "Сколько примерно времени эта задача займет?");
$tasks = 3;

$name = readline("Напишите Ваше имя.");
$age = (int)readline("Сколько Вам лет?");

$task1 = readline(STR_QUESTION);
$time1 = (int)readline(STR_TIME);

$task2 = readline(STR_QUESTION);
$time2 = (int)readline(STR_TIME);

$task3 = readline(STR_QUESTION);
$time3 = (int)readline(STR_TIME);

$allTime = $time1 + $time2 + $time3;

echo "Вас зовут $name, вам $age лет"  . PHP_EOL;
echo "$name, сегодня у вас запланировано $tasks приоритетных задачи на день:" . PHP_EOL;

echo "- $task1 ($time1" . "ч)" . PHP_EOL;
echo "- $task2 ($time2" . "ч)" . PHP_EOL;
echo "- $task3 ($time3" . "ч)" . PHP_EOL;

echo "Примерное время выполнения плана =" . $allTime . "ч";