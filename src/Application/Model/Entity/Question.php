<?php

namespace Application\Model\Entity;

/**
 * Description of Question
 * Entity Class
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

 class Question {
    
    private $id;
    private $question;
    private $alternativeA;
    private $alternativeB;
    private $alternativeC;
    private $alternativeD;
    private $disciplineId;
    private $difficulty;
    private $value;
    private $rightAnswer;

    public function setId($int){
        if(!is_int($int)){
            throw new \InvalidArgumentException(
                    "O valor não é válido"
                    );
        }
        $this->id = $int;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setQuestion($string){
        if(!is_string($string) || empty($string)){
            throw new \InvalidArgumentException(
                    "A questão colocada não é válida");
        }
        $this->question = $string;
        return $this;
    }

    public function getQuestion(){
        return $this->question;
    }

    public function setAlternativeA($string){
        if(!is_string($string) || empty($string)){
            throw new \InvalidArgumentException(
                    "A alternativa não é válida"
                    );
        }
        $this->alternativeA = $string;
        return $this;
    }

    public function getAlternativeA(){
        return $this->alternativeA;
    }

    public function setAlternativeB($string){
        if(!is_string($string) || empty($string)){
            throw new \InvalidArgumentException(
                    "A alternativa não é válida"
                    );
        }
        $this->alternativeB = $string;
        return $this;
    }

    public function getAlternativeB(){
        return $this->alternativeB;
    }

    public function setAlternativeC($string){
        if(!is_string($string) || empty($string)){
            throw new \InvalidArgumentException(
                    "A alternativa não é válida"
                    );
        }
        $this->alternativeC = $string;
        return $this;
    }

    public function getAlternativeC(){
        return $this->alternativeC;
    }

    public function setAlternativeD($string){
        if(!is_string($string) || empty($string)){
            throw new \InvalidArgumentException(
                    "A alternativa não é válida"
                    );
        }
        $this->alternativeD = $string;
        return $this;
    }

    public function getAlternativeD(){
        return $this->alternativeD;
    }

    public function setRightAnswer($int){
        if(!is_integer($int) || empty($int)){
            throw new \InvalidArgumentException(
                    "A resposta não é válida"
                    );
        }
        $this->rightAnswer = $int;
        return $this;
    }
    
    public function getDisciplineId() {
    	return $this->disciplineId;
    }
    
    public function getValue() {
    	return (int) $this->value;
    }
    
    public function compareAnAnswer($value) {
    	if($value == $this->rightAnswer){
    		return true;
    	}
    	return false;
    }

}
