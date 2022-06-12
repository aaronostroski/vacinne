<?php
$message = "
<div class='row'>
    <div id='alert' class='col s12'>
        <ul>
            message
        </ul>
    </div>
</div>
";

if (count($_GET) > 0) {
    $list = "";
    foreach ($_GET as $key => $error) {
        $list .= "<li>* {$error}</li>";
    }

    $message = str_replace("message", $list, $message);

    echo $message;
}
