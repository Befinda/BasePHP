<?php
/*Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка. Класс должен содержать приватные свойства description, dateCreated, dateUpdated, dateDone, priority (int), isDone (bool) и обязательное user (User). В качества класса пользователя воспользуйтесь разработанным на уроке. Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters). При вызове метода setDescription обновляйте значение свойства dateUpdated. Разработайте метод markAsDone, помечающий задачу выполненной, а также обновляющий свойства dateUpdated и dateDone.*/
require_once 'User.php';

class Task
{
	private string $description;
	private DateTime $dateCreated;
	private DateTime $dateUpdate;
	private ?DateTime $dateDone;
	private int $priority;
	private bool $isDone;
	private User $user;


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
}

$play = new User("Margo");
$task1 = new Task('Выполнить задачу', $play);
$task1->setDescription("Задача выполняется");

$task1->markAsDone();

print_r($task1);

// $data = new DateTime();
// var_dump($data);