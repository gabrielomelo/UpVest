<?php

namespace Application\Model\DataBase;
require_once 'Config/configDB.php';//Configurations for PDO connection

/**
 * Description of Storage
 * Database Acess Class
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

Class Storage {
    
    public $PDO;
    
    public function __construct() {
        $this->Connect();
    }
    
    private function Connect(){
        try {
            $this->PDO = new \PDO(DSN, USER, PASSWD);
        } catch (\PDOException $ex) {
            
        }
    }
    
    private function Disconnect(){
        $this->PDO = null;
    }
    
    public function __destruct() {
        $this->Disconnect();
    }
    
}