<?php
require './layout/head.php';
echo "
    <div id='register-form'>
        <div class='row'>
            <h1 id='brand'>Vaccine</h1>
            <form class='col s12 grey lighten-4' action='/vacinne/src/controller/singup.php' method='POST' >
                <div class='row'>
                    <div class='input-field col s6'>
                        <input id='first_name' type='text' name='firstName' class='validate'>
                        <label for='first_name'>Primeiro nome</label>
                    </div>
                        <div class='input-field col s6'>
                        <input id='last_name' type='text' name='lastName'  class='validate'>
                        <label for='last_name'>Ultimo nome</label>
                    </div>
                </div>
                <div class='row'>
                    <div class='input-field col s6'>
                        <input id='email' type='email' name='email'  class='validate'>
                        <label for='email'>Email</label>
                    </div>
                    <div class='input-field col s6'>
                        <input id='confirm-email' type='email' name='confirmEmail'  class='validate'>
                        <label for='confirm-email'>Confirma email</label>
                    </div>
                </div>
                <div class='row'>
                    <div class='input-field col s6'>
                        <input id='password' type='password' name='password' class='validate'>
                        <label for='password'>Password</label>
                    </div>
                    <div class='input-field col s6'>
                        <input id='confirm-password' type='password' name='confirmPassword' class='validate'>
                        <label for='confirm-password'>Confirma password</label>
                    </div>
                </div>
                <div class='row'>
                    <div class='input-field col s6'>
                        <input id='birthdate' type='date' name='birthdate'>
                        <label for='birthdate'>Data de nascimento: </label>
                    </div>
                </div>
                ";
require_once "./layout/alert.php";
echo "<div class='footer'>
                    <a href='/vacinne/src/singin.php'>Ir para tela de login</a>
                    <button type='submit' class='btn waves-effect waves-light' type='submit' name='action'>Enviar
                        <i class='material-icons right'></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
";
require './layout/footer.php';
