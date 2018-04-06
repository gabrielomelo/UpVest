<?php

namespace Application\Model\Services;
use Application\Model\DAO\RankingDAO;
use Application\Model\DataBase\Storage;
use Application\Model\Entity\Question;
use Application\Model\Entity\User;

/**
 * Description of LastQuestion 
 * RN for end of questionary
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class LastQuestion {
	
	private $RankingDAO;
	private $user;
	
	public function __construct(User $user) {
		$this->user = $user;
		$this->RankingDAO = new RankingDAO(new Storage());
	}
	
	public function getService() {
		$this->incrementRanking();
		$this->reloadInfo();
		$this->clearSession();
		return $this->user;
	}
	
	private function incrementRanking() {
		$this->user->getRanking()
			->setRightAnswers(
				(int)(((int) $_SESSION['session']['right_answers']) + ((int) $this->user->getRanking()->getRightAnswers())) 
				);

		$this->user->getRanking()
			->setTotalAnswers(
				(int)(((int) $_SESSION['session']['total_answers']) + ((int) $this->user->getRanking()->getTotalAnswers())) 
				);
		

		$this->user->getRanking()
			->setPoints(
				(int)(((int) $_SESSION['session']['points']) + ((int) $this->user->getRanking()->getPoints()))
				);	
		$this->user->getRanking()->setNextLevel();		
	}
	
	private function reloadInfo() {
		$this->RankingDAO->update($this->user->getRanking());
		$this->user->setRanking($this->RankingDAO->selectOne(
				$this->user->getId()
				)
			);
	}
	
	private function clearSession() {
		unset($_SESSION['question']);
		unset($_SESSION['session']);
	}
	
}