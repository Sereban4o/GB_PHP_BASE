<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 2,
        'Иванов Петр' => 3,
        'Петров Иван' => 2,
        'Сидоров Роман' => 5
    ],
    'БАП20' => [
        'Антонов Антон' => 2,
        'Романов Антон' => 5,
        'Антонов Максим' => 3,
        'Александров Александр' => 4,
        'Иванова Ольга' => 3,
    ]
];

$max = 0;
$groupName = "";

foreach ($students as $key => $group) {
    $assessment = array_sum($group) / count($group);
    if ($assessment > $max) {
        $max = $assessment;
        $groupName = $key;
    }
};

echo "Самую высокую оценку по успеваемости имеет группа {$groupName}. Она равна {$max}" . PHP_EOL;

$expulsion = $students;
$point = 3;

foreach ($expulsion as $key => &$group) {
    foreach ($group as $gkey => $studentPoint) {
        if ($studentPoint >= $point) {
            unset($group[$gkey]);
        }
    };
    if (count($group) == 0) {
        unset($expulsion[$key]);
    }
};

print_r($expulsion);
