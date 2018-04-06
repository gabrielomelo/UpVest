<?php

namespace Application\Model\Services;
use Application\Model\Utility\Redirect;

/**
 * Description of Logout
 * Destroy sessions of user
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Logout {
	
	public static function logout() {
		session_destroy();
		Redirect::inApp('index.php');
	}
	
}