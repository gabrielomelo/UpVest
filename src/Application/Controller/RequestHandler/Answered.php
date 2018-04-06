<?php

use Application\Model\Services\Answered as Service;
use Application\Model\Utility\Serialize;
use Application\Model\Utility\Redirect;
use Application\Model\Services\LastQuestion;
/**
 * Description of Answered
 * Handler HTTP
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Answered {
	
	private $request;
	private $question;
	private $user;
	
	public function __construct(Array $request) {
		$this->request = $request;
		$this->getParameters();
	}
	
	public function getService() {
		if($_SESSION['session']['try'] >= 5){
			$service = new LastQuestion($this->user);
			$_SESSION['user'] = Serialize::serialize($service->getService());
			Redirect::inApp('profile.php');
		}
		$service = new Service($this->request, $this->question, $this->user);
		$_SESSION['question'] = Serialize::serialize($service->getService());
	}
	
	private function getParameters() {
		$this->question = Serialize::unserialize($_SESSION['question']);
		$this->user = Serialize::unserialize($_SESSION['user']);
	}
	
}