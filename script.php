<?php
echo "Hello, world!\n";
//Task 2
$name = readline("Привет! Как ваше имя? ");
$age = readline("Сколько вам лет? ");
echo "Вас зовут {$name}, вам {$age} лет.\n";
//Task 3
$task1 = readline("Какая первая задача стоит перед вами сегодня?");
$taskTime1 = (int)readline("Сколько примерно времени эта задача займет?");
$task2 = readline("Какая вторая задача стоит перед вами сегодня?");
$taskTime2 = readline("Сколько примерно времени эта задача займет?");
$task3 = readline("Какая третья задача стоит перед вами сегодня?");
$taskTime3 = readline("Сколько примерно времени эта задача займет?");
$taskTimeSum = $taskTime1 + $taskTime2 + $taskTime3;
echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ({$taskTime1}ч)
- $task2 ({$taskTime2}ч)
- $task3 ({$taskTime3}ч)
Примерное время выполнения плана = {$taskTimeSum}ч";
