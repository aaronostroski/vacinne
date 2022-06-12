<?php
require_once '../lib/Vaccine.php';

if (count($_POST) > 0) {
    $errorMessages = [];
    $Vaccine = new Vaccine();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $imageUrl = $_POST['imageUrl'];

    if (!($name && $description)) {
        $errorMessages[] = "Você deve passar uma descrição e um nome para a vacina!";
        $query = http_build_query($errorMessages);
        header('Location: ' . '/vacinne/src/form.php?' . "{$query}");
        exit;
    }

    if ($id) {
        $vaccine = $Vaccine->updateVaccine(array(
            "id" => $id,
            "name" => $name, "description" => $description,
            "imageUrl" => $imageUrl
        ));
        header('Location: ' . '/vacinne/src/list.php');
    } else {
        $vaccine = $Vaccine->createVaccine(array(
            "name" => $name, "description" => $description,
            "imageUrl" => $imageUrl
        ));
        header('Location: ' . '/vacinne/src/list.php');
    }
} else {
    header('Location: ' . '/vacinne/index.php');
}
