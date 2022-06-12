<?php
require_once './lib/Vaccine.php';

$defaultImagePath = "/vacinne/src/assets/default_card.jpg";

$id = str_replace("/", "", $_SERVER['PATH_INFO']);
if ($id) {
    $Vaccine = new Vaccine();
    $vaccine = $Vaccine->getVaccine(["id" => $id]);
}

require './layout/head.php';
require './layout/nav.php';

echo "
    <div id='vaccine-form'>
        <form class='grey lighten-4' action='/vacinne/src/controller/form.php' method='POST' >
            <input type='hidden' name='id' value='{$id}' />
            <div class='row'>
                <div class='input-field col s12'>
                    <input id='name' type='text' name='name' value='{$vaccine->name}' class='validate'>
                    <label for='name'>Nome da vacina</label>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                    <input id='description' type='text' name='description' value='{$vaccine->description}' class='validate'>
                    <label for='description'>Descrição da vacina</label>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                    <input id='imageUrl' type='text' name='imageUrl' value='{$vaccine->imageUrl}' class='validate'>
                    <label for='imageUrl'>Url da imagem da vacina</label>
                </div>
            </div>
            ";
require_once "./layout/alert.php";
echo "<div class='footer'>
                <a href='/vacinne/src/list.php'>Voltar para a lista de vacinas</a>
                <button type='submit' class='btn waves-effect waves-light' type='submit' name='action'>Salvar
                    <i class='material-icons right'></i>
                </button>
            </div>
        </form>
    </div>
";

require './layout/footer.php';
