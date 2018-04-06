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

?>
<!DOCTYPE html>
<html>
  <!-- 
* @author Sabrina Ribeiro 
* E-mail: ssabrinaribeiro@outlook.com
-->
        <meta charset="UTF-8">
        <title>Configurações | UpVest</title>
        <link rel="shortcut icon" href="favicon.ico" >
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="style/menu-cfg-modal.css"/>
        <link rel="stylesheet" type="text/css" href="style/global.css"/>
        <link rel="stylesheet" type="text/css" href="style/configuracoes.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script type="javascript" src="js/mudar.js"></script></head>
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
               			 <table id="config"><tr><td><a href="profile.php" title="voltar" >Voltar</a></td></tr>
			                <tr><td><a class="" title=""  href="ranking.php?action=UpdateRanking">Ranking</a></td></tr>
			                <tr><td><a class="" title="" id="mEdit" href="staff.html">A equipe</a></td></tr>
			                <tr><td><a type="" href="settings.php?action=Logout" title="SAIR" id="mEdit">Sair</a></td></tr>
			               	<tr><td><a class="close" title="Fechar" id="mEdit" href="#close">x</a></td></tr>
               			 </table>
               		 </div>
                </div>
            </section>
        </header>
		<!-- FIM DO CABECALHO -->
	<section class="body-cfg">

       		 <div class="body-cfg-1">
    			 <strong id="title">Informações gerais da conta</strong><br><br>
       				 <table id="configs">
				        <tr>
				        <td style="border-bottom: 1px #E6E6E6 solid;">
				        <strong>Nome</strong></td> <td style="border-bottom: 1px #E6E6E6 solid;"><?php echo $user->getName(); ?></td>
                <td>
                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Alterar nome
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><form action="" method="post" ><input type="text" name="name" id="input_conf" placeholder="Novo nome"></input></li>
                <li><center><button class="send" onclick="window.location.href='settings.php?action=UpdateInfo'">alterar</button></form></center></li>
                </ul>
                </div>
                </td>
				        </tr>
				        <tr>
				        <td id="name" style="border-bottom: 1px #E6E6E6 solid;"><strong>E-mail</strong></td> <td style="border-bottom: 1px #E6E6E6 solid;"><?php echo $user->getEmail(); ?></td>
				        <td style="border-bottom: 1px #E6E6E6 solid;">
               <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Alterar e-mail
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><form action="" method="post" ><input type="text" id="input_conf" placeholder="Novo e-mail"></input></li>
                <li><center><button class="send">alterar</button></form></center></li>
                </ul>
                </div>    
                </td>
				        </tr>
				        <tr>
				         <td id="name" style="border-bottom: 1px #E6E6E6 solid;"><strong>Senha</strong></td> <td style="border-bottom: 1px #E6E6E6 solid;">**********</td> <td style="border-bottom: 1px #E6E6E6 solid;">
                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Alterar senha
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><form action="" method="post" ><input type="password" name="password" id="input_conf" placeholder="Nova senha"></input></li>
                <li><center><button class="send">alterar</button></form></center></li>
                </ul>
                </div>
				        </tr>
				         <tr>
				         <td><strong>Estado</strong> <td><?php echo Translate::getStateName($user->getState()); ?></td> <td>
                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Alterar Estado
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><form action="" method="post" ><select name="user_state" id="input_conf"> 
                                    <option value="selectState">* Selecione seu estado...</option>
                                    <option value="ac">Acre</option> 
                                    <option value="al">Alagoas</option> 
                                    <option value="am">Amazonas</option> 
                                    <option value="ap">Amapá</option> 
                                    <option value="ba">Bahia</option> 
                                    <option value="ce">Ceará</option> 
                                    <option value="df">Distrito Federal</option> 
                                    <option value="es">Espírito Santo</option> 
                                    <option value="go">Goiás</option> 
                                    <option value="ma">Maranhão</option> 
                                    <option value="mt">Mato Grosso</option> 
                                    <option value="ms">Mato Grosso do Sul</option> 
                                    <option value="mg">Minas Gerais</option> 
                                    <option value="pa">Pará</option> 
                                    <option value="pb">Paraíba</option> 
                                    <option value="pr">Paraná</option> 
                                    <option value="pe">Pernambuco</option> 
                                    <option value="pi">Piauí</option> 
                                    <option value="rj">Rio de Janeiro</option> 
                                    <option value="rn">Rio Grande do Norte</option> 
                                    <option value="ro">Rondônia</option> 
                                    <option value="rs">Rio Grande do Sul</option> 
                                    <option value="rr">Roraima</option> 
                                    <option value="sc">Santa Catarina</option> 
                                    <option value="se">Sergipe</option> 
                                    <option value="sp">São Paulo</option> 
                                    <option value="to">Tocantins</option> 
                                </select>
                <li><center><button class="send">alterar</button></form></center></li>
                
                </ul>
                </div>
                 </td>
				        </tr>
       				 </table>
        	</div>

            <div class="body-cfg-2">
                <strong>Excluir conta</strong>
                    <p>Ao deletar sua conta, você perderá o acesso ao sistema por meio deste usuário, perderá permanentemente os pontos acumulados, o número de acertos e sua posição no ranking.<br/>
                    Tem certeza que deseja excluir sua conta?</p>
                        <script type="text/javascript">

                                function showDeleteMessage(){
                                    if(window.confirm("Deseja realmente excluir sua conta!?")){
                                        window.location.href='settings.php?action=DeleteAccount';
                                    }
                                }
                      </script>
                    <button id="cfg-delete-account"  onclick="showDeleteMessage();">Excluir conta permanentemente</button>
             </div>
        </section> 
        <footer>
          <center><p>&copy; <em>UpVest</em> - 2016
          <h5><a href="https://www.facebook.com/UpVest112/" title="Find us on Facebook" target="blank"><img src="media/facebook.png"/></a>
          <a href="https://twitter.com/up_vest" target="blank"><img title="Find us on Twitter" src="media/twitter.png" /></a>
          <a href="https://instagram.com/up_vest" target="blank"><img title="Find us on Instagram" src="media/instagram.png" /></a></h5>
          </p></center>
        </footer>
</body>
</html>
