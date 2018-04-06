<?php

use Application\Model\Services\DeleteAccount as Service;
use Application\Model\Utility\Serialize;
use Application\Model\Utility\Redirect;
use Application\Model\Services\Logout;

/**
 * Description of Delete Account
 * Handler for a service
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class DeleteAccount {
	
	private $user;
	
	public function __construct(Array $request) {
		$this->user = Serialize::unserialize($_SESSION['user']);
	}
	
	public function getService(){
		Service::delete($this->user);
		Logout::logout();
		Redirect::inApp('index.php#close');
		
	}
}