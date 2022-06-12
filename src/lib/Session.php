<?php

class Session
{
    public function createSession(object $user): bool
    {
        $_SESSION['user'] = $user;
        return true;
    }

    public function logout(): bool
    {
        session_destroy();
        return true;
    }

    public function isLogged(): bool
    {
        return isset($_SESSION['user']) ? true : false;
    }

    public function getSessionInfo()
    {
        return $_SESSION['user'];
    }
}
