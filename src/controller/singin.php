<?php
require_once '../lib/User.php';
require_once '../lib/Session.php';

if (count($_POST) > 0) {
    $errorMessages = [];
    $User = new User();

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!($email && $password)) {
        $errorMessages[] = "Verifique se todos os campos estão preenchidos!";
        $query = http_build_query($errorMessages);
        header('Location: ' . '/vacinne/src/singin.php?' . "{$query}");
        exit;
    }

    $user = $User->getUserByEmail(array("email" => $email));

    if ($user->id && $user->password == sha1($password)) {
        $Session = new Session();
        $Session->createSession($user);
        header('Location: ' . '/vacinne/src/list.php');
    } else {
        $errorMessages[] = "E-mail ou senha incorretos!";
        $query = http_build_query($errorMessages);
        header('Location: ' . '/vacinne/src/singin.php?' . "{$query}");
    }
} else {
    header('Location: ' . '/vacinne/index.php');
}
