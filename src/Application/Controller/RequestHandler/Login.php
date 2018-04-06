<?php

/**
 * Description of Login
 * Controller 
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

use Application\Model\Entity\User;
use Application\Model\Services\Login as Service;

class Login {

    private $request;
    
    public function __construct(Array $request){
        $this->request = $request;
    }
    
    public function getService(){
        try{
            $user = $this->setVOAttributes();
            $service = new Service($user);
            $service->getService();
        }catch(\InvalidArgumentException $e){
            
        }
    }
    
    private function setVOAttributes(){
        $user = new User();
        $user->setEmail($this->request['email'])
                ->setPassword(sha1($this->request['password']));
        return $user;
    }
}
