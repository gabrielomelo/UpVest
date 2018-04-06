<?php

namespace Application\Model\Services;

use Application\Model\Entity\Question;
use Application\Model\Entity\User;
use Application\Model\Utility\Redirect;
use Application\Model\Utility\Serialize;
use Application\Model\DAO\RankingDAO;
use Application\Model\DataBase\Storage;
use Application\Model\DAO\QuestionDAO;

/**
 * Description of Answered
 * RN for quiz
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Answered {
	
	private $answerData;
	private $question;
	private $user;
	private $RankingDAO;
	
	public function __construct(Array $answerData, Question $question, User $user) {
		$this->answerData = $answerData;
		$this->question = $question;
		$this->user = $user;
	}
	
	public function getService() {
		$Storage = new Storage();
		$this->RankingDAO = new RankingDAO($Storage);
		$this->QuestionDAO = new QuestionDAO($Storage);
		$this->seeTheRightAnswer();
		$this->loadAQuestion();
		$_SESSION['session']['position']++;
		$_SESSION['session']['try']++;
		return $this->question;
	}
	
	private function loadAQuestion() {
		$this->question = $this->QuestionDAO->fetchOne((int)$_SESSION['session']['qs_ids'][$_SESSION['session']['position']]['id']);
	}
	
	private function seeTheRightAnswer() {
		$answer = (!isset($this->answerData['answer'])) ? 0 : $this->answerData['answer'];
		if($this->question->compareAnAnswer($answer)){
			$_SESSION['session']['right_answers']++;
			$_SESSION['session']['points'] += $this->question->getValue();
		}
		$_SESSION['session']['total_answers']++;
	}
	
}