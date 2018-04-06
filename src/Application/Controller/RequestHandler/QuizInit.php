<?php

use Application\Model\Services\QuizInit as Service;
use Application\Model\Utility\Serialize;
use Application\Model\Entity\Question;
use Application\Model\Entity\User;
use Application\Model\Utility\Redirect;

/**
 * Description of Questionary 
 * Handle the request 
 * @author Gabriel Melo <dev.gabrielmelo@gmail.com>
 */

class QuizInit {
	
	private $request;
	private $user;
	private $question;
	
	public function __construct(Array $request) {
		$this->request = $request;
		$this->getParameters();
	}
	
	public function getService() {
		$service = new Service($this->request, $this->user);
		$_SESSION['question'] = Serialize::serialize($service->getService());
		Redirect::inApp('quiz.php');
	}
	
	private function getParameters() {
		$this->user = Serialize::unserialize($_SESSION['user']);
		if(!isset($_SESSION['session'])){
			$_SESSION['session'] = Array (
					"try" => 1,
					"qs_ids" => null,
					"position" => 0,
					"right_answers" => 0,
					"total_answers" => 0,
					"points" => 0
					);
		}
	}
	
}