<?php
class User
{
    public string $username;
    public ?string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;


    /**
     * @param string $username
     */
    public function __construct(string $username)
    {
        $this->username = $username;

    }
}