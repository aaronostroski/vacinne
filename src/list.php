<?php
require_once './lib/Vaccine.php';

$defaultImagePath = "/vacinne/src/assets/default_card.jpg";
$Vaccine = new Vaccine();
$vaccines = $Vaccine->listVaccine();

require './layout/head.php';
require './layout/nav.php';

echo "
    <div id='cards' class='container'>
        <div class='row'>
            <a class='add' href='/vacinne/src/form.php'>+ Adicionar Vacina</a>
        </div>
        <div class='row'>
            <div class='col s12 m12'>
            ";

foreach ($vaccines as $vaccine) {
    $img =  isset($vaccine['imageUrl']) && $vaccine['imageUrl'] != "" ? $vaccine['imageUrl'] : $defaultImagePath;
    echo "
    <div class='col s12 m4'>
    <div class='card'>
    <div class='card-image'>
                <img src='{$img}'>
                <span class='card-title'>{$vaccine['name']}</span>
                </div>
                <div class='card-content'>
                <p>{$vaccine['description']}</p>
                </div>
                <div class='card-action'>
                <a href='/vacinne/src/form.php/{$vaccine['id']}'>Editar</a>
                <a href='/vacinne/src/controller/delete_vaccine.php?id={$vaccine['id']}' class='red-text'>Deletar</a>
        </div>
    </div>
    </div>
    ";
}

echo "
            </div>
        </div>
    </div>
";

require './layout/footer.php';
