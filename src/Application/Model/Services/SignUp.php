<?php

namespace Application\Model\Services;
use Application\Model\Entity\User;
use Application\Model\DAO\UserDAO;
use Application\Model\DataBase\Storage;
use Application\Model\Entity\Ranking;
use Application\Model\DAO\RankingDAO;
use Application\Model\Services\Login;
use Application\Model\Utility\Redirect;

/**
 * Description of SignUP
 * SignUP Service
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class SignUp {
    
    private $user;
    private $userDAO;
    private $rankingDAO;
    
    public function __construct(User $user) {
        $this->user = $user;
        $this->userDAO = new UserDAO(new Storage());
        $this->rankingDAO = new RankingDAO(new Storage());
    }
    
    public function getService(){
        try {
            //if($this->verifyUserExistence()){
            //	Redirect::inApp('signup.php');
            //	exit();
            //}
            $id = $this->userDAO->insert($this->user);
            if(false === $this->rankingDAO->insert($id)){
                throw new \Exception(
                    "Um erro ocorreu tente mais tarde"
                    ); 
            }
            $service = new Login($this->user);
            $service->getService();
            
        }catch(\InvalidArgumentException $e){
            
        }catch(\Exception $e){
            
        }
    }
   
    private function verifyUserExistence(){
    	$return = $this->userDAO->selectByEmail($this->user->getEmail());
        if($return > 0 ){
           return true;
        }
        return false;
    }
    
}
