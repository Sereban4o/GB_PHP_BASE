<?php
$name = readline("Напишите Ваше имя.");

for ($i = 1; $i <= 3; $i++) {
    ${"task$i"} = readline("Какая задача стоит перед вами сегодня?");
    ${"time$i"} = readline("Сколько примерно времени эта задача займет?");
};

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:" . PHP_EOL;
$allTime = 0;
for ($i = 1; $i <= 3; $i++) {
    echo "-${"task$i"} (${"time$i"})ч" . PHP_EOL;
    $allTime = $allTime + ${"time$i"}; 
};
echo "Примерное время выполнения плана = $allTime ч";