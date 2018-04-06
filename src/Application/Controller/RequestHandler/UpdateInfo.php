<?php

use Application\Model\Utility\Serialize;
use Application\Model\Services\UpdateInfo as Service;

/**
 * Description of UpdateInfo
 * Request handler of Update service
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class UpdateInfo {
	
	private $request;
	private $user;
	
	public function __construct(Array $request) {
		$this->request = $request;
		$this->user = Serialize::unserialize($_SESSION['user']);
	}
	
	public function getService() {
		$this->setVOAttributes();
		$service = new Service($this->user); 
	}
	
	private function setVOAttributes() {
		$this->user->setName( (!isset($this->request['name'])) ? $this->user->getName() : $this->request['name'] );
		$this->user->setEmail( (!isset($this->request['email'])) ? $this->user->getEmail() : $this->request['email'] );
		$this->user->setPassword( (!isset($this->request['password'])) ? $this->user->getPassword() : $this->request['password'] );
		$this->user->setState( (!isset($this->request['state'])) ? $this->user->getState() : $this->request['state'] );
	}
	
}