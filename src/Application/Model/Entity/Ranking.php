<?php

namespace Application\Model\Entity;

/**
 * Description of Ranking
 * Entity Ranking
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Ranking {
	
    private $id;
    private $userId;
    private $level;
    private $points;
    private $needPoints;
    private $difficulty;
    private $rightAnswers;
    private $totalAnswers;
    
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
    
    public function setUserId($int){
        if(!is_int($int)){
            throw new \InvalidArgumentException(
                    "O valor não é válido"
                    );
        }
        $this->userId = $int;
    }
    
    public function getUserId(){
        return $this->userId;
    }
    
    public function setLevel($int){
        if(!is_int($int) || empty($int)){
            throw new \InvalidArgumentException(
                    "O nível colocado não é válido"
                    );
        }
        $this->level = $int;
        return $this;
    }
    
    public function getLevel(){
        return $this->level;
    }
    
    public function setPoints($int){
        if(!is_int($int)){
            throw new \InvalidArgumentException(
                    "A pontuação colocada não é válida"
                    );
        }
        $this->points = $int;
        return $this;
    }
    
    public function getPoints(){
        return $this->points;
    }
    
    public function setNeedPoints($int){
        if(!is_int($int) || empty($int)){
            throw new \InvalidArgumentException(
                    "A pontuação calculada não é válida"
                    );
        }
        $this->needPoints = $int;
        return $this;
    }
    
    public function getNeedPoints(){
        return (int) $this->needPoints;
    }
    
    public function getRemainPoints() {
    	return $this->needPoints - $this->points;
    }
    
    public function setDifficulty($int){
        if(!is_int($int) || empty($int)){
            throw new \InvalidArgumentException(
                    "A dificuldade colocada não é válida"
                    );
        }
        $this->difficulty = $int;
        return $this;
    }
    
    public function getDifficulty(){
        return (int) $this->difficulty;
    }
    
    public function setRightAnswers($int){
        if(!is_int($int)){
            throw new \InvalidArgumentException(
                    "O valor não é valido"
                    );
        }
        $this->rightAnswers = $int;
        return $this;
    }
    
    public function getRightAnswers(){
        return $this->rightAnswers;
    }
    
    public function setTotalAnswers($int){
        if(!is_int($int)){
            throw new \InvalidArgumentException(
                    "O valor não é valido"
                    );
        }
        $this->totalAnswers = $int;
        return $this;
    }
    
    public function getTotalAnswers(){
        return $this->totalAnswers;
    }
    
    public function setNextLevel() {
    	if ($this->points >= $this->needPoints) {
    		$this->defineNeedPoints();
    		$this->level++;
    	}
    }
    
    private function defineNeedPoints(){
    	if ($this->level <= 10) {
    		$this->needPoints *= 1.2;
    	} elseif ($this->level > 11 && $this->level < 20) {
    		$this->needPoints *= 1.15;
    	} elseif ($this->level > 21 && $this->level < 30) {
    		$this->needPoints *= 1.1;
    	} elseif ($this->level > 31 && $this->level < 40) {
    		$this->needPoints *= 1.05;
    	} elseif ($this->level > 40) {
    		$this->needPoints *= 1.025;
    	}
    }
    
}
