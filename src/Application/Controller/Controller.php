<?php

namespace Application\Controller;

/**
 * Description of Controller
 * Controller
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */
 
class Controller {
    
    private $request;
    private $action;

    public function __construct(Array $request) {
        $this->request = $request;
    }

    public function getAction(){
        if(isset($_REQUEST['action'])){
            $this->instanceClass();
            return $this->action->getService();
        }
    }
    
    private function instanceClass(){
        $className = $this->request['action'];
        require_once 'RequestHandler'.\DIRECTORY_SEPARATOR.$className.'.php';
        $this->action = new $className($this->request);
    }
    
}
