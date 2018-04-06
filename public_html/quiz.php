<?php

require_once 'bootstrap.php';

use Application\Model\Utility\Auth;
use Application\Controller\Controller;
use Application\Model\Utility\Serialize;
use Application\Model\Utility\Translate;
use Application\Model\Utility\Redirect;

Auth::acessControl();

$controller = new Controller($_REQUEST);
$controller->getAction();
if(!isset($_SESSION['question'])){
	Redirect::inApp('profile.php');
}
$question = Serialize::unserialize($_SESSION['question']);

?>
<!DOCTYPE html>
<html>
    <head>
<!-- 
* @author Sabrina Ribeiro 
* E-mail: ssabrinaribeiro@outlook.com
-->

        <meta charset="UTF-8">
	    <title> <?php echo Translate::getDiscName($question->getDisciplineId()); ?> | UpVest</title>
	    <link rel="shortcut icon" href="favicon.ico" >
        <link rel="stylesheet" type="text/css" href="style/menu-cfg-modal.css"/>
        <link rel="stylesheet" type="text/css" href="style/global.css"/>
        <link rel="stylesheet" type="text/css" href="style/quiz.css"/>
        <script src="js/jquery.js"></script>
        <script src="js/Quiz.js"></script>

    </head>

    <body>
    <!-- CABECALHO -->
        <header id="topo">
            <section class="container">
             <a href="profile.php#close">
				<img id="logo" src="media/upvest_logo_final.png"> 
				</a>
				 <nav>
                    <ul>
                    <li><a class="menu-cfg" id="" href="#open">☰</a></li> 
                    </ul>
                </nav>
                <div id="open" class="menu-cfg-modal">
                <div>
                <table id="config" style="font-size: 10pt;">
                <tr><td><a href="profile.php#close"  title="">Voltar</a></td></tr>
                <tr><td><a href="settings.php#close" title="" id="mEdit">Configurações</a></td></tr>
                <tr><td><a class="" title="" href="ranking.php?action=UpdateRanking#close">Ranking</a></td></tr>
                <tr><td><a class="" title="" href="staff.html#close">A equipe</a></td></tr>
                <tr> <td><button OnClick="window.location.href='profile.php?action=Logout'" title="" id="btn-logout">Sair</button></td></tr>
                <tr><td><a class="close" title="Fechar"  href="#close">x</a></td></tr>
                </table>
                </div>
                </div>
            </section>
        </header>
		<!-- FIM DO CABECALHO -->
		<section class="body-quiz">
        <div id="quiz">
            <h1 align="center"><?php echo Translate::getDiscName($question->getDisciplineId()); ?></h1>
                <form id="question-form" action="" method="post" name="question">
                     <p><?php echo utf8_encode($question->getQuestion()); ?></p>
                        <p><input type="radio" name="answer" value="1" /> <?php echo utf8_encode($question->getAlternativeA()); ?> </p>
                        <p><input type="radio" name="answer" value="2" /> <?php echo utf8_encode($question->getAlternativeB()); ?> </p>
                        <p><input type="radio" name="answer" value="3" /> <?php echo utf8_encode($question->getAlternativeC()); ?> </p>
                        <p><input type="radio" name="answer" value="4" /> <?php echo utf8_encode($question->getAlternativeD()); ?> </p>
                        <span>
                        	<button OnClick="window.location.assign('profile.php')" id="btn-v">voltar</button>
                        	<button id="btn-v" type="submit" name="" value="" >Próxima</button>
                        </span>
                </form>
        </div>

        </section>
    </body>
</html>
