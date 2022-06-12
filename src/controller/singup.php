<?php
require_once '../lib/User.php';
require_once '../lib/Session.php';

if (count($_POST) > 0) {
    $errorMessages = [];
    $User = new User();
    $Session = new Session();

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];
    $confirmEmail = $_POST['confirmEmail'];
    $gender = $_POST['gender'];
    $birthdate = date('Y-m-d', strtotime($_POST['birthdate']));

    if (!($email && $firstName && $lastName && $password && $confirmPassword && $confirmEmail && $birthdate)) {
        $errorMessages[] = "Verifique se todos os campos estão preenchidos!";
        $query = http_build_query($errorMessages);
        header('Location: ' . '/vacinne/src/singup.php?' . "{$query}");
        exit;
    }

    $hasUserEmail = $User->hasUserEmail(array("email" => $email));

    if ($hasUserEmail->id) {
        $errorMessages[] = "E-mail já existe na nossa base! Digite outro";
    }

    if (count($errorMessages) > 0) {
        $query = http_build_query($errorMessages);
        header('Location: ' . '/vacinne/src/singup.php?' . "{$query}");
    } else {
        $userCreated = $User->createAccount(array(
            "firstName" => $firstName, "lastName" => $lastName, "password" => sha1($password), "email" => $email, "gender" => $gender,
            "birthdate" => $birthdate
        ));
        $user = $User->getUserByEmail(array("email" => $email));
        $Session->createSession($user);
        header('Location: ' . '/vacinne/src/list.php');
    }
} else {
    header('Location: ' . '/vacinne/index.php');
}
