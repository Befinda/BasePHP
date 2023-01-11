<?php
require_once 'User.php';
//require_once 'Comment.php';
//require_once 'TaskService.php';

class Task
{
	private string $description;
	private DateTime $dateCreated;
	private DateTime $dateUpdate;
	private ?DateTime $dateDone;
	private int $priority;
	private bool $isDone;
	private User $user;
	private ?array $comments = [];


	/**
	 * @param string $description
	 * @param User $user
	 * @param int $priority
	 */
	public function __construct(string $description, User $user, int $priority = 1)
	{
		$this->description = $description;
		$this->dateCreated = new DateTime();
		$this->dateUpdate = $this->dateCreated;
		$this->priority = $priority;
		$this->isDone = false;
		$this->user = $user;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string
	{
		return $this->description;
	}

	/**
	 * @return DateTime
	 */
	public function getDateCreated(): DateTime
	{
		return $this->dateCreated;
	}

	/**
	 * @return DateTime
	 */
	public function getDateUpdate(): DateTime
	{
		return $this->dateUpdate;
	}

	/**
	 * @return DateTime|null
	 */
	public function getDateDone(): ?DateTime
	{
		return $this->dateDone;
	}

	/**
	 * @return int
	 */
	public function getPriority(): int
	{
		return $this->priority;
	}

	/**
	 * @return bool
	 */
	public function getIsDone(): bool
	{
		return $this->isDone;
	}


	/**
	 * @return User
	 */
	public function getUser(): User
	{
		return $this->user;
	}

	/**
	 * @param string $description 
	 * @return self
	 */
	public function setDescription(string $description): self
	{
		$this->description = $description;
		$this->dateUpdate = new DateTime();
		return $this;
	}

	public function markAsDone(): void
	{
		$this->isDone = true;
		$this->dateUpdate = new DateTime();
		$this->dateDone = new DateTime();
	}

/**
 * @return array
 */
// public function getComments(): array
// {
// 	return $this->comments;
// }


/**
 * @param array $comments 
 * @return self
 */
// public function setComments(Comment $comment): self
// {
// 	$this->comments[] = $comment;
// 	return $this;
// }
}

// $play = new User("Margo");
// $task1 = new Task('Выполнить задачу', $play);
// $task1->setDescription("Задача выполняется");
// TaskService::addComment($play, $task1, 'Задача принята к исполнению');
// $task1->markAsDone();
// TaskService::addComment($play, $task1, 'Задача исполнена');

// print_r($task1);