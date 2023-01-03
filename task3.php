<?php
/* Подготовьте многомерный ассоциативный массив следующего вида:
$students = [
   'ИТ20' => [
       'Иванов Иван' => 5,
       'Кириллов Кирилл' => 3
   ],
   'БАП20' => [
       'Антонов Антон' => 4
   ]
];
В качестве ключей массива используются названия групп. В качестве элементов — отношение студента и его оценки. Добавьте произвольные имена студентов и их оценки в обе группы. После подготовки массива, реализуйте скрипт командной строки, выполняющий следующие вычисления:
Вычислить арифметическое среднее по всем оценкам в рамках группы. Вывести на экран название группы с самым большим вычисленным значением успеваемости;
Составить список на отчисление, в который попадают студенты из любой группы, имеющие оценку ниже трёх. В списке студенты должны быть сгруппированы по их группе. Выведите полученные данные в консоль, с помощью функции print_r; */

$students = [
    'ПО' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Абрамов Абрам' => 2
    ],
    'ЭВМ' => [
        'Антонов Антон' => 4,
        'Баранов Иван' => 5,
        'Игнатов Роман' => 5
    ]
];

$del = [];
$average = [];
foreach ($students as $group => $groupStud) {
    $sum = 0;
    foreach ($groupStud as $student => $scope) {
        $sum += $scope;
        if ($scope < 3) $del[$student] = $scope;
    }
    $average[$group] = round(($sum / count($groupStud)), 2);
}

echo array_search($maxAver, $average) . " => " . max($average) . " \n ";
print_r($del);
