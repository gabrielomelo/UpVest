<?php 

require_once 'bootstrap.php';

use Application\Controller\Controller;
use Application\Model\Utility\Auth;

Auth::loggedAcessControl();

$controller = new Controller($_REQUEST);
$controller->getAction();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>UpVest | Sistema de Auxilio ao Vestibulando</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="favicon.ico" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/index.css" />
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img id="logo" src="media/upvest_logo_final.png">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#comofunciona" class="comofunciona">COMO FUNCIONA</a></li>
        <li><a href="#equipe" class="equipe">A EQUIPE</a></li>
        <li><a href="signup.php">CADASTRE-SE</a></li>
        <li><a href="login.php" class="login-d">ENTRE</a></li>
      </ul>
    </div>
  </div>
  
</nav>

<div class="container-fluid bg-1 text-center">
  <h2 class="margin">No seu ritmo, no seu tempo.<br> Resolva questões de inúmeros vestibulares do país, incluindo enem.</h2>
  <button class="btn" onclick="window.location.href='signup.php#close'">cadastre-se</button><br>
  ou, <a href="login.php">entre</a>.
</div>
<div class="container-fluid bg-3 text-center" id="comofunciona">    
  <h2 class="margin" style="font-family: 'Lobster'">Como funciona</h2><br>
  <div class="row">
    <center><p>Mais do que um simples quiz de perguntas do vestibular, o <em>UpVest</em> oferece um sistema de ranking e pontos, além de uma área de trabalho onde é possível escolher um questionário de apenas uma matéria.  Assim, caso queira focar em uma matéria especifica, não precisará responder questões de outras matérias para concluir o quiz.</p></center>
     <div class="col-sm-4"> 
     <center><img src="media/login-password.png" class="img-responsive margin" style="width:30%" alt="Login"></center>
     <h4><strong>Cadastre-se e faça login</strong></h4><p>Para ter acesso ao ranking e questões é necessário que tenha uma conta <em>UpVest</em>.</p>
    </div>
    <div class="col-sm-4"> 
   <center><img src="media/question-list.png" class="img-responsive margin" style="width:30%" alt="Questões"></center>
      <h4><strong>Escolha uma matéria</strong></h4><p>Clique no icone da matéria que deseja estudar, comece a responder e suba de nível!</p>
    </div>
    <div class="col-sm-4"> 
     <center><img src="media/rankings.png" class="img-responsive margin" style="width: 30%" alt="Ranking"></center>
       <h4><strong>Veja sua posição no ranking</strong></h4><p>Saiba em que lugar você se posiciona em relação aos outros estudantes.</p>
    </div>
  </div>
</div>
<div class="container-fluid bg-2 text-center" id="equipe">    
  <h2 class="margin"  style="font-family: 'Lobster'">A equipe</h2><br>
  <center><p>
Criado em 2016 como requisito do nosso trabalho de conclusão de curso do curso Técnico em Informática para Internet da Etec Juscelino Kubitschek de Oliveira, o UpVest visa facilitar a vida do estudante que está se preparando para o vestibular, oferecendo questões de diversos vestibulares do país e um sistema de ranking e pontos, tornando a jornada estudandil mais dinâmica.<br>
<strong><em>"O homem não é nada além daquilo que a educação faz dele."</em> - Immanuel Kant.</strong>
  </p></center>
      <ul class="foto-equipe">
       <li><img style="width:150px;height:150px;border-radius: 170px;border: #ffffff solid 5px; border: #fff solid 5px;" src="media/sabrinaribeiro.jpg"></li>
       <li><img style="width:150px;height:150px;border-radius: 170px;border: #ffffff solid 5px; border: #fff solid 5px;" src="media/gabrielmelo.jpg"></li>
       <li><img style="width:150px;height:150px;border-radius: 170px;border: #ffffff solid 5px; border: #fff solid 5px;"src="media/keyte.jpg"></li>
       <li><img style="width:150px;height:150px;border-radius: 170px;border: #ffffff solid 5px; border: #fff solid 5px;" src="media/gabriellopes.jpg"></li>
       <li><img style="width:150px;height:150px;border-radius: 170px;border: #ffffff solid 5px; border: #fff solid 5px;"src="media/carolina.jpg"></li>
       <li><img style="width:150px;height:150px;border-radius: 170px;border: #ffffff solid 5px; border: #fff solid 5px;"src="media/guilherme.jpg"></li>
    </ul>
</div>


<footer class="container-fluid bg-4 text-center">
  <p>&copy; <em>UpVest</em> - 2016</p> 
   <div class="col-sm-4"> 
    <p><h3>CONTATO</h3>
    <h5>Dúvidas, sugestões, reclamações e outros</h5>
    contato_upvest@outlook.com</p>
    </div>
   <div class="col-sm-4"> 
    <p><h3>SOBRE NÓS</h3>
    <h5>Criado em 2016 como requisito do nosso trabalho de conclusão de curso do curso Técnico em Informática para Internet da Etec Juscelino Kubitschek de Oliveira, o UpVest visa facilitar a vida do estudante que está se preparando para o vestibular, oferecendo questões de diversos vestibulares do país e um sistema de ranking e pontos, tornando a jornada estudandil mais dinâmica.</h5>
    </p>
    </div>
   <div class="col-sm-4"> 
    <p><h3>NOS ACOMPANHE NAS REDES SOCIAIS</h3>
    <h5><a href="https://www.facebook.com/UpVest112/" title="Find us on Facebook" target="blank"><img src="media/facebook.png"/></a>
    <a href="https://twitter.com/up_vest" title="Find us on Twitter" target="blank"><img  src="media/twitter.png" /></a>
    <a href="https://instagram.com/up_vest" title="Find us on Instagram"target="blank"><img src="media/instagram.png" /></a></h5>
    </p>
    </div>
</footer>
<script>
$(function() {
                $('a').bind('click',function(event){
                    var $anchor = $(this);
        
                  $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 1000,'swing');
                });
            });
</script>
</body>
</html>
