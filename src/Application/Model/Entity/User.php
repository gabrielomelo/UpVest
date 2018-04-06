<?php

namespace Application\Model\Entity;

/**
 * Description of Entity User
 * Entity Class
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class User {
    
    private $id;
    private $name;
    private $email;
    private $state;
    private $password;
    private $ranking;

    public function setId($int){
        if(!is_int($int) || empty($int)){
            throw new \InvalidArgumentException(
                    "O valor não é válido"
                    );
        }
        $this->id = $int;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setName($string){
        if(empty($string) || !is_string($string)){
            throw new \InvalidArgumentException(
                    "O nome é obrigatório"
                    );
        }
        $this->name = $string;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setEmail($string){
        if(empty($string) || !is_string($string)){
            throw new \InvalidArgumentException(
                    "O Email é obrigatório"
                    );
        }
        $this->email = $string;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setState($string){
        if(empty($string) || !is_string($string)){
            throw new \InvalidArgumentException(
                    "O estado colocado não é válido"
                    );
        }
        $this->state = $string;
        return $this;
    }

    public function getState(){
        return $this->state;
    }

    public function setPassword($string){
        if(empty($string) || !is_string($string)){
            throw new \InvalidArgumentException(
                    "A senha colocada não é válida"
                    );
        }
        $this->password = $string;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }
    
    public function setRanking(Ranking $ranking){
        $this->ranking = $ranking;
    }
    
    public function getRanking(){
        return $this->ranking;
    }
    
}
