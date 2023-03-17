<?php
$name = readline("Напишите Ваше имя.");
$tasks = 3;

for ($i = 1; $i <= $tasks; $i++) {
    ${"task$i"} = readline("Какая задача стоит перед вами сегодня?");
    ${"time$i"} = readline("Сколько примерно времени эта задача займет?");
};

echo "$name, сегодня у вас запланировано $tasks приоритетных задачи на день:" . PHP_EOL;
$allTime = 0;
for ($i = 1; $i <= $tasks; $i++) {
    echo "-${"task$i"} (${"time$i"})ч" . PHP_EOL;
    $allTime = $allTime + ${"time$i"}; 
};
echo "Примерное время выполнения плана = $allTime ч";