<?php
require_once 'Comment.php';
require_once 'Task.php';
require_once 'User.php';

class TaskService
{

    public static function addComment(User $user, Task $task, string $text)
    {
        $newcomment = new Comment($user, $task, $text);
        $task->setComments($newcomment);
    }
}