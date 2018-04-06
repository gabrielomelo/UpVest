<?php

require_once 'bootstrap.php';

use Application\Controller\Controller;

$controller = new Controller($_REQUEST);
$controller->getAction();

?>
<!DOCTYPE html>
<html>
    <head>
<!-- 
* @author Sabrina Ribeiro 
* E-mail: ssabrinaribeiro@outlook.com
-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link src="jscript/user_validator.js" type="text/javascript"/>
        <link rel="stylesheet" type="text/css" href="style/global.css"/>
        <link rel="stylesheet" type="text/css" href="style/login.css"/>
        <title>Login | UpVest</title>
    </head>
    <body>
    <!-- CABECALHO -->
        <header id="topo">
            <section class="container">
                <a href="index.php#close"><img id="logo" src="media/upvest_logo_final.png"></a>
                <nav>
                <ul>
                    <li><a href="index.php#close">Inicio</a></li>
                    <li><a href="signup.php#close">Cadastre-se</a></li>
                    <ul>
                </nav>
            </section>
        </header>
            <section class="body-login">
            <center>
            <div id="log-in">
             <form name = "form_login" method = "post" action = "" Onsubmit = "" id="form_login">
                    <table>
                        <tr>
                        <td><h2>Entre</h2></td>
                        </tr>
                        <tr>
                        <td><input type="text" name="email" class="user_email" placeholder = "E-mail *" /></td>
                        </tr>
                        <tr>
                        <td><input type="password" name="password" class="user_pass" placeholder = "Senha *" /></td>
                        </tr>
                        <tr>
                        <td><input type="checkbox" name="remember_me" value="true" /><span style="font-family: Basic;">Mantenha-me conectado</span></td>
                        </tr>
                        <tr>
                       <td> <span style="color:#AB0202; font-family: Basic;">* Preenchimento obrigatório.</span></td>
                        </tr>
                        <tr>
                        <td><input type="submit" name="action" class="submit" id="login_confirm" value="Login" /></td>
                        </tr>
                    </table>
            </form>
            </div>
            </center>
            </section>
                <center><p>&copy; <em>UpVest</em> - 2016
    <h5><a href="https://www.facebook.com/UpVest112/" title="Find us on Facebook" target="blank"><img src="media/facebook.png"/></a>
    <a href="https://twitter.com/up_vest" target="blank"><img title="Find us on Twitter" src="media/twitter.png" /></a>
    <a href="https://instagram.com/up_vest" target="blank"><img title="Find us on Instagram" src="media/instagram.png" /></a></h5>
    <center></p>
    </body>
</html>
