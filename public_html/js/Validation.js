/**
 * 
 */

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