<?php
/*Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author
(User), task (Task) и text (string). TaskService должен реализовывать статичный метод
addComment(User, Task, text), добавляющий к задаче комментарий пользователя. Отношение
между классами задачи и комментария должны быть построены по типуассоциация,поэтому
необходимо добавить соответствующее свойство и методы классу Task.
*/
require_once 'User.php';
require_once 'Task.php';
class Comment
{
    private User $author;
    private Task $task;
    private string $text;



    /**
     * @param User $author
     * @param Task $task
     * @param string $text
     */
    public function __construct(User $author, Task $task, string $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }
}