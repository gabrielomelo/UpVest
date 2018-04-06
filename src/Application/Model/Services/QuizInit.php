<?php

namespace Application\Model\Services;

use Application\Model\Entity\Question;
use Application\Model\Entity\User;
use Application\Model\DAO\QuestionDAO;
use Application\Model\DataBase\Storage;

/**
 * Description of Answered
 * RN for questionary submit
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class QuizInit {
	
	private $user;
	private $question;
	private $answerData;
	private $QuestionDAO;
	
	public function __construct(Array $answerData) {	
		$this->answerData = $answerData;
		$this->QuestionDAO = new QuestionDAO(new Storage());
	}
	
	public function getService() {
		$this->loadIds();
		$this->loadAQuestion();
		$_SESSION['session']['position']++;
		return $this->question;
	}
	
	private function loadIds() {
		$_SESSION['session']['qs_ids'] = $this->QuestionDAO->selectIds($this->answerData['disc']);
	}
	
	private function loadAQuestion() {
		$this->question = $this->QuestionDAO->fetchOne((int)$_SESSION['session']['qs_ids'][$_SESSION['session']['position']]['id']);
	}
	
}