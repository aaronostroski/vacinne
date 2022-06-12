<?php
require_once "../lib/Session.php";
$Session = new Session();
$Session->logout();

header('Location: ' . '/vacinne/src/singin.php');
