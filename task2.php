<?php
/*Разработайте функцию с объявленными типами аргументов и возвращаемого значения,
принимающую в качестве аргумента массив целых чисел. Результатом работы функции
должен быть массив, содержащий три элемента: max — наибольшее число, min —
наименьшее число, avg — среднее арифметическое всех чисел массива;*/

function descriptArray(array $arrNum): array
{
    return [
        'max' => max($arrNum),
        'min' => min($arrNum),
        'avg' => round((array_sum($arrNum) / count($arrNum)), 2)
    ];
};

$arrNum = [];
for ($i = 0; $i < 10; $i++) {
    $arrNum[] = mt_rand(0, 99);
}

print_r($arrNum);
print_r(descriptArray($arrNum));
