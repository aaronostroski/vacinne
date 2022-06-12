<?php
require_once "./lib/Session.php";
$Session = new Session();
$session = $Session->getSessionInfo();

echo " <nav>
    <div id='navbar' class='container'>
      <a href='/vacinne/src/list.php'>
        <h1 id='brand'>Vaccine</h1>
      </a>
      <div class='login-info'>
        <p>
          Bem vindo, <strong>{$session->firstName} {$session->lastName}</strong>
        </p>
        <a href='/vacinne/src/controller/logout.php'>
          <strong>Sair</strong>
        </a>
      </div>
    </div>
  </nav>";
