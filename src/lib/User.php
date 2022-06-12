<?php
require_once 'Database.php';

class User extends Database
{
    public function __construct()
    {
        $this->table = 'user';
        parent::__construct();
    }

    public function createAccount(array $user)
    {
        return $this->insert($user);
    }

    public function hasUserEmail(array $data)
    {
        return $this->load($data);
    }

    public function getUserByEmail(array $data)
    {
        return $this->load($data);
    }
}
