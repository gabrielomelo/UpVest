<?php

require_once 'bootstrap.php';

use Application\Model\Utility\Auth;
use Application\Controller\Controller;
use Application\Model\Utility\Serialize;
use Application\Model\Utility\Translate;

Auth::acessControl();

$controller = new Controller($_REQUEST);
$controller->getAction();

$user = Serialize::unserialize($_SESSION['user']);
$ranking = $user->getRanking();

?>
<!-- 
* @author Sabrina Ribeiro 
* E-mail: ssabrinaribeiro@outlook.com
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $user->getName(); ?> | UpVest</title>
	    <link rel="shortcut icon" href="favicon.ico" >
		<link rel="stylesheet" type="text/css" href="style/profile.css" />
        <link rel="stylesheet" type="text/css" href="style/menu-cfg-modal.css"/>
        <link rel="stylesheet" type="text/css" href="style/global.css"/>
    </head>

<body>
    <!-- CABECALHO -->
    <header id="topo">
        <section class="container">
             <a href="profile.php#close"><img id="logo" src="media/upvest_logo_final.png"></a>

				 <nav>
                    <ul>
                    <li><a class="menu-cfg" id="" href="#open" >☰</a></li> 
                    </ul>
                </nav>

        <div id="open" class="menu-cfg-modal">
            <div>
            <table id="config" style="font-size: 10pt;">
                <tr><td><a href="settings.php#close"  title="" >Configurações</a></td></tr>
                <tr><td><a class="" title="" href="ranking.php?action=UpdateRanking#close">Ranking</a></td></tr>
                <tr><td><a class="" title="" href="staff.html#close">A equipe</a></td></tr>
                <tr><td><a class="" title="" href="profile.php?action=Logout" id="logout" title="SAIR" >Sair</a></td></tr>
                <tr><td><a class="close" title="Fechar"  href="#close">x</a></td></tr>
            </table>
            </div>
        </div>
        </section>
    </header>
		<!-- FIM DO CABECALHO -->
		<section class="body-profile">
		      <section id="body-user">
			     <div id="body-user-information">
                <img src="media/upvest.png" width="200"  style="margin-top: 100px; margin-left: 35px;"> 
				    <table align="center" id="user-information" >
                         <tr><td><strong><?php echo $user->getName(); ?></strong></td></tr>
				         <tr><td>Nível <?php echo $ranking->getLevel(); ?></td></tr>
    				     <tr><td><?php echo $ranking->getPoints(); ?> Pontos</td></tr>
    				     <tr><td><?php echo $ranking->getRemainPoints(); ?> pontos restantes para o próximo nível</td></tr>
                         <tr><td><?php echo Translate::getStateName($user->getState()); ?>, Brasil</td></tr>
				    </table>
			     </div>
               </section>

			   <section class="quiz-subjects">

			         <div id="quiz-subjects">
				         <table id="subjects">
                            <tr>
                            <td><a href="quiz.php?action=QuizInit&disc=1&"><img id="" src="media/materias/_portugues.png"><br>Português</a></td>
                            <td><a href="quiz.php?action=QuizInit&disc=2&"><img id="" src="media/materias/_matematica.png"><br>Matemática</a></td>
                            <td><a href="quiz.php?action=QuizInit&disc=3&"><img id="" src="media/materias/_historia.png"><br>História</a></td>
                            <td><a href="quiz.php?action=QuizInit&disc=5"><img id="" src="media/materias/_fisica.png"><br>Física</a></td>
                            </tr>
                            <tr>
                            <td><a href="quiz.php?action=QuizInit&disc=6"><img id="" src="media/materias/_sociologia.png"><br>Sociologia</a></td>
                            <td><a href="quiz.php?action=QuizInit&disc=4"><img id="" src="media/materias/_geografia.png"><br>Geografia</a></td>
                            <td><a href="quiz.php?action=QuizInit&disc=7"><img id="" src="media/materias/_filosofia.png"><br>Filosofia</a></td>
                            <td><a href="quiz.php?action=QuizInit&disc=8"><img id="" src="media/materias/_quimica.png"><br>Química</a></td>
                            </tr>
                        </table>
                     </div>
			     </section>
		</section>
        <footer>
    <center><p>&copy; <em>UpVest</em> - 2016
    <h5><a href="https://www.facebook.com/UpVest112/" title="Find us on Facebook" target="blank"><img src="media/facebook.png"/></a>
    <a href="https://twitter.com/up_vest" target="blank"><img title="Find us on Twitter" src="media/twitter.png" /></a>
    <a href="https://instagram.com/up_vest" target="blank"><img title="Find us on Instagram" src="media/instagram.png" /></a></h5>
    <center></p>
    </footer>
</body>
</html>
