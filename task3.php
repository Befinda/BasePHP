<?php
/*Представьте, что вы ведёте счёт на пальцах одной
ладони, не считая два раза подряд один и тот же,
начиная с большого. Дойдя до мизинца, вы
продолжаете счёт в обратном направлении.
Напишите скрипт для запуска из командной строки,
определяющий по введённому положительному числу
палец, который соответствует ему по счёту. В
случаях, если введено некорректное значение
(меньше или равное нуля) повторяйте запрос ввода,
пока не будет введено корректное число. */
$count = 0;

while ($count <= 0) {
    $count = (int)readline("Введите число:  ");
};

$countArrow = (int)($count / 4);
$countRemain = $count % 4;
if ($countRemain == 0) $countRemain = 2;
if ($countArrow % 2 != 0) {
    $countRemain = 6 - $countRemain;
};

echo "палец №{$countRemain}";
