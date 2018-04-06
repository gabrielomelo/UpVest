<?php

namespace Application\Model\Utility;
use Application\Model\Utility\Redirect;

/**
 * Description of Auth
 * Keep out motherfucker
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Auth {
	
	public static function acessControl() {
		if (!isset($_SESSION['user']) && $_SESSION['loggedin'] !== true){
			Redirect::inApp('index.php');
		}
	}
	
	public static function loggedAcessControl() {
		if (isset($_SESSION['user']) && $_SESSION['loggedin'] === true){
			Redirect::inApp('profile.php');
		}
	}
}