<?php

namespace Application\Model\Services;
use Application\Model\Entity\User;
use Application\Model\DAO\UserDAO;
use Application\Model\DataBase\Storage;
use Application\Model\Utility\Serialize;
use Application\Model\DAO\RankingDAO;
use Application\Model\Utility\Redirect;

/**
 * Description of Login
 * Login Service
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Login {
	
	private $user;
	private $userDAO;
	private $rankingDAO;
    
    public function __construct(User $user) {
        $this->user = $user;
        $Storage = new Storage();
        $this->userDAO = new UserDAO($Storage);
        $this->rankingDAO = new RankingDAO($Storage);
    }
    
    public function getService() {
        $this->loadUser();
        $this->setCredencials();
        Redirect::inApp('profile.php#close');
    }
    
    private function loadUser() {
        $this->user = $this->userDAO->selectByEmailAndPassword($this->user);
        if (!$this->user){
            Redirect::inApp('index.php');
        }
        $ranking = $this->rankingDAO->selectOne(
                    $this->user->getId()
                );
        $this->user->setRanking($ranking);
    }
    
    private function setCredencials(){
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = Serialize::serialize($this->user);
    }
    
}
