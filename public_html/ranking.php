<?php

require_once 'bootstrap.php';

use Application\Model\Utility\Auth;
use Application\Controller\Controller;
use Application\Model\Utility\Serialize;

Auth::acessControl();

$controller = new Controller($_REQUEST);
$users = $controller->getAction();

?>
<!DOCTYPE html>
<html>
    <head>
<!-- 
* @author Sabrina Ribeiro 
* E-mail: ssabrinaribeiro@outlook.com
-->
        <meta charset="UTF-8">
        <title>Ranking | UpVest</title>
        <link rel="shortcut icon" href="favicon.ico" >
        <link rel="stylesheet" type="text/css" href="style/menu-cfg-modal.css"/>
        <link rel="stylesheet" type="text/css" href="style/global.css"/>
        <link rel="stylesheet" type="text/css" href="style/ranking.css"/>
        <script type="javascript" src=""></script>
        <script type="javascript" src="js/jquery.js">
            
        </script>
    </head>
    <body>
    <div id="interface">
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
                <tr><td><a class="" title=""  href="profile.php#close">Voltar</a></td></tr>
                <tr><td><a href="settings.php#close"  title="" >Configurações</a></td></tr>
                <tr><td><a class="" title=""  href="staff.html#close">A equipe</a></td></tr>
                <tr><td><button type="" href="ranking.php?action=Logout" id="logout" title="SAIR" >Sair</button></td></tr>
                <tr><td><a class="close" title="Fechar"  href="#close">x</a></td></tr>
                </table>
                </div>
                </div>
            </section>
        </header>
		<!-- FIM DO CABECALHO -->
		<section class="body-ranking">
        <div id="ranking">
        <h1>Ranking</h1>
       <table id="mat" align="center">
       <tr>
                <td><img id="" src="media/materias/_portugues.png"></td>
                <td><img id="" src="media/materias/_matematica.png"></td>
                <td><img id="" src="media/materias/_historia.png"></td>
                <td><img id="" src="media/materias/_biologia.png"></td>
                <td><img id="" src="media/materias/_fisica.png"></td>
                <td><img id="" src="media/materias/_sociologia.png"></td>
                <td><img id="" src="media/materias/_geografia.png"></td>
                <td><img id="" src="media/materias/_filosofia.png"></td>
                <td><img id="" src="media/materias/_quimica.png"></td>
                <td><img id="" src="media/materias/_arte.png"></td>
                </tr>
                </table><br/>
        <table id="ranking" align="center">
        <tr><td><strong style="color: #9351C2;">Colocação</strong></td><td><strong style="color: #9351C2;">Nível</strong></td><td><strong style="color: #9351C2;">Pontos</strong></td><td><strong style="color: #9351C2;">Usuário</strong></td></tr>
        <?php
        $i = 0;
        foreach($users as $ranking){
        	if($i > 9) break;
        	$p = $i + 1;
        	echo "<tr><td>".$p."º Posição</td><td>".$ranking['level']."</td><td>".$ranking['points']."</td><td>".$ranking['name']."</td></tr>";
        	$i++;
        }
        ?>
        </table>
        </div>
</section>
</div>
    <footer>
          <center>
          <p>&copy; <em>UpVest</em> - 2016
          <h5><a href="https://www.facebook.com/UpVest112/" title="Find us on Facebook" target="blank"><img src="media/facebook.png"/></a>
          <a href="https://twitter.com/up_vest" target="blank"><img title="Find us on Twitter" src="media/twitter.png" /></a>
          <a href="https://instagram.com/up_vest" target="blank"><img title="Find us on Instagram" src="media/instagram.png" /></a></h5>
          </p>
          </center>
    </footer>
</body>
</html>
