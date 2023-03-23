<?php

$item = readline("Какой предмет будем искать?");

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function findItem(string $a, array $mass): bool
{
    if (in_array($a, $mass)) {
        return true;
    } else {
        foreach ($mass as $key => $element) {
            if (is_array($element)) {
                $result = findItem($a, $element);
                if ($result == true) {
                    return $result;
                }
            } else {
                $result = $element === $a;
            };
        };
        return $result;
    }
};

if (findItem($item, $box)) {
    echo "Предмет {$item} найден";
} else {
    echo "Предмет {$item} не найден";
}
