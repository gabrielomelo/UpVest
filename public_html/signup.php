<?php

require_once 'bootstrap.php';
use Application\Controller\Controller;
$controller = new Controller($_REQUEST);
$controller->getAction();
?>
<DOCTYPE! html>
<html lang="pt-br">
<head>
<!-- 
* @author Sabrina Ribeiro 
* E-mail: ssabrinaribeiro@outlook.com
-->
<title>Cadastre-se | UpVest</title>
<meta charset="utf-8" />

<link rel="stylesheet" type="text/css" href="style/global.css" />
<link rel="stylesheet" type="text/css" href="style/cadastrar.css"/>
<link rel="stylesheet" type="text/css" href="style/modal.css"/>
<link rel="stylesheet" type="text/css" href="style/modal-login.css"/>
<script type="text/javascript">

function validacao_cad() {
	
	c_senha=document.form.password;
	senha=document.form.password_confirm;
	
	if(document.form.name.value==""){
		alert("Por favor, preencha o campo nome.");
		document.form.name.focus();
		return false;
	}
	if(document.form.email.value==""){
		alert("Por favor, preencha o campo e-mail.");
		document.form.email.focus();
		return false;
	}
	if(document.form.email.value.indexOf('@')==-1 || document.form.email.value.indexOf('.')==-1){
		alert("Por favor, utilize um e-mail válido.");
		document.form.email.focus();
		return false;
	}
	if(document.form.password.value==""){
		alert("Por Favor, preencha o campo senha.");
		document.form.password.focus();
		return false;
	}
	if(c_senha != senha){
		alert("Senha incorreta.");
		document.form.password.focus();
		return false;
	}
	
}

</script>
<script type="text/javascript">

function icone(img){
	
	icon = img;
	
}

</script>
</head>
<body>
	<!-- CABECALHO -->
		<header id="topo">
			<section class="container">
				<a href="index.php#close"><img id="logo" src="media/upvest_logo_final.png"></a>
				<nav>
					<ul>
					<li><a class="button" href="login.php">Entre</a></li> 
                    </ul>
				</nav>
        

			</section>
		</header>
<!-- CORPO -->
<section class="body-register">
<div id="form">	
            <form class="sign_up_form" name="form" method="post" onsubmit="return validacao_cad()" enctype="multipart/form-data" action = "">
			<table align="center">
						<h1>Cadastre-se</h1>	
								<tr><td><input type="text" name="name" placeholder="*Nome" maxlength="50" /></td></tr>
                                <tr>                                <td><select name="state" id="user_state"> 
                                    <option value="">* Selecione seu estado...</option>
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
                                </select></td>
                                </tr></tr>
								<tr><td><input type="text" name="email" placeholder="*Email" maxlength="50" /></td>
        
								</tr>
                               <tr>
                               <td><input type="password" name="password" placeholder="*Senha" maxlength="16" /></td></tr>
                               <td><input type="password" name="password_confirm" placeholder="*Confirmar senha" maxlength="16" /></td></tr>
                               </tr>	
			<tr><td>	<span style="color: #AB0202;">* Preenchimento obrigatório.</span></td></tr>
			</table>
			<input class="submit" type="submit"  value="SignUp" name="action" id="sign_up_confirm"/>
			</form>
</div>
                <footer>
          <center><p>&copy; <em>UpVest</em> - 2016
          <h5><a href="https://www.facebook.com/UpVest112/" title="Find us on Facebook" target="blank"><img src="media/facebook.png"/></a>
          <a href="https://twitter.com/up_vest" target="blank"><img title="Find us on Twitter" src="media/twitter.png" /></a>
          <a href="https://instagram.com/up_vest" target="blank"><img title="Find us on Instagram" src="media/instagram.png" /></a></h5>
          </p></center>
        </footer>
</section>
	</body>
</html>
