<?php
require './layout/head.php';
echo "
    <div id='login-form'>
    <main>
        <h1 id='brand'>Vaccine</h1>
        <h5 class='indigo-text'>Por favor, entre na sua conta!</h5>
        <div class='section'></div>
        <div>
            <div class='z-depth-1 grey lighten-4 row' style='display: inline-block; width: 400px;padding: 32px 48px 0px 48px; border: 1px solid #EEE;'>
            <form class='col s12' method='post' action='/vacinne/src/controller/singin.php' >
                <div class='row'>
                <div class='col s12'>
                </div>
                </div>

                <div class='row'>
                <div class='input-field col s12'>
                    <input class='validate' type='email' name='email' id='email' />
                    <label for='email'>Seu e-mail</label>
                </div>
                </div>

                <div class='row'>
                <div class='input-field col s12'>
                    <input class='validate' type='password' name='password' id='password' />
                    <label for='password'>Sua senha</label>
                </div>

                </div>
";
require_once "./layout/alert.php";
echo "<div class='row'>
                    <button type='submit' class='btn waves-effect waves-light col s12' type='submit' name='action'>Enviar
                        <i class='material-icons right'></i>
                    </button>
                </div>
            </form>
            </div>
        </div>
        <a href='/vacinne/src/singup.php'>Cadastre-se</a>
    </div>   
";
require './layout/footer.php';
