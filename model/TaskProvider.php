<?php

class TaskProvider
{
    private array $tasks;

    public function __construct()
    {
        $this->tasks = $_SESSION['tasks'] ?? [];
    }
    public function getUndoneList(): array
    {


        /*
        return array_map(function (Task $task) {
        return $task->isDone() ?: $task;
        }, $this->tasks);
        */


        /**
         * @var Task $task
         */
        $tasks = [];
        foreach ($this->tasks as $key => $task) {
            if (!$task->isDone) {
                $tasks[$key] = $task;
            }
        }


        return $tasks;
    }
    public function addTask(Task $task): void
    {
        $_SESSION['tasks'][] = $task;
        $this->tasks[] = $task;
    }

    public function deleteTask(int $key): void
    {
        unset($_SESSION['tasks'][$key]);
        unset($this->tasks[$key]);
    }
}