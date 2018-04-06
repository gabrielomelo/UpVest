<?php

use Application\Model\Services\Logout as Service;

/**
 * Description of Logout
 * Handler for a Service 
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Logout {

	public function getService() {
		Service::logout();
	}
	
}