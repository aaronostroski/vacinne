<?php
require_once '../lib/Vaccine.php';

if (count($_GET) > 0) {
    $Vaccine = new Vaccine();
    $id = $_GET['id'];


    if ($id) {
        $Vaccine->deleteVaccine(array(
            "id" => $id,
        ));
        header('Location: ' . '/vacinne/src/list.php');
    }
} else {
    header('Location: ' . '/vacinne/index.php');
}
