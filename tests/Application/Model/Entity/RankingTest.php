<?php

namespace Application\Model\Entity;

/**
 * Description of Ranking
 * Test class of entity Ranking
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

use Application\Model\Entity\Ranking;

class RankingTest extends \PHPUnit_Framework_TestCase {
    
    public function testInstaniationWithoutArguments(){
        $instance = new Ranking();
        $this->assertInstanceOf(
                "Application\Model\Entity\Ranking",
                $instance);
    }
    
    /**
     * @depends testInstantiationWithoutArguments
     */
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage O nível colocado não é válido
     */
    
    public function testSetLevelShouldFail(){
        $invalidLevel = "gfdsgfd";
        $instance = new Ranking();
        $instance->setLevel($invalidLevel);
        
    }
    
    public function testSetLevelShouldWork(){
        $validLevel = 2;
        $instance = new Ranking();
        $return = $instance->setLevel($validLevel);
        $this->assertAttributeEquals(
                $validLevel,
                'level',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }
    
    public function testGetLevelShouldWork(){
        $validLevel = 3;
        $instance = new Ranking();
        $instance->setLevel($validLevel);
        $return = $instance->getLevel();
        $this->assertEquals(
                $return,
                $validLevel
                );
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A pontuação colocada não é válida
     */
    
    public function testSetPointsShouldFail(){
        $invalidPoints = "gfdsgfd";
        $instance = new Ranking();
        $instance->setPoints($invalidPoints);
        
    }
    
    public function testSetPointsShouldWork(){
        $validPoints = 2;
        $instance = new Ranking();
        $return = $instance->setPoints($validPoints);
        $this->assertAttributeEquals(
                $validPoints,
                'points',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }
    
    public function testGetPointsShouldWork(){
        $validPoints = 3;
        $instance = new Ranking();
        $instance->setPoints($validPoints);
        $return = $instance->getPoints();
        $this->assertEquals(
                $return,
                $validPoints
                );
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A pontuação calculada não é válida
     */
    
    public function testSetNeedPointsShouldFail(){
        $invalidNeedPoints = "gfdsgfd";
        $instance = new Ranking();
        $instance->setNeedPoints($invalidNeedPoints);
        
    }
    
    public function testSetNeedPointsShouldWork(){
        $validNeedPoints = 2;
        $instance = new Ranking();
        $return = $instance->setNeedPoints($validNeedPoints);
        $this->assertAttributeEquals(
                $validNeedPoints,
                'needPoints',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }
    
    public function testGetNeedPointsShouldWork(){
        $validNeedPoints = 3;
        $instance = new Ranking();
        $instance->setNeedPoints($validNeedPoints);
        $return = $instance->getNeedPoints();
        $this->assertEquals(
                $return,
                $validNeedPoints
                );
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A dificuldade colocada não é válida
     */
    
    public function testSetDifficultyShouldFail(){
        $invalidDifficulty = "gfdsgfd";
        $instance = new Ranking();
        $instance->setDifficulty($invalidDifficulty);
        
    }
    
    public function testSetDifficultyShouldWork(){
        $validDifficulty = 2;
        $instance = new Ranking();
        $return = $instance->setDifficulty($validDifficulty);
        $this->assertAttributeEquals(
                $validDifficulty,
                'difficulty',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }
    
    public function testGetDifficultyShouldWork(){
        $validDifficulty = 3;
        $instance = new Ranking();
        $instance->setDifficulty($validDifficulty);
        $return = $instance->getDifficulty();
        $this->assertEquals(
                $return,
                $validDifficulty
                );
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage O valor não é valido
     */
    
    public function testSetRightAnswersShouldFail(){
        $invalidRightAnswers = "gfdsgfd";
        $instance = new Ranking();
        $instance->setRightAnswers($invalidRightAnswers);
        
    }
    
    public function testSetRightAnswersShouldWork(){
        $validRightAnswers = 2;
        $instance = new Ranking();
        $return = $instance->setRightAnswers($validRightAnswers);
        $this->assertAttributeEquals(
                $validRightAnswers,
                'rightAnswers',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }
    
    public function testGetRightAnswersShouldWork(){
        $validRightAnswers = 3;
        $instance = new Ranking();
        $instance->setRightAnswers($validRightAnswers);
        $return = $instance->getRightAnswers();
        $this->assertEquals(
                $return,
                $validRightAnswers
                );
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage O valor não é valido
     */
    
    public function testSetTotalAnswersShouldFail(){
        $invalidTotalAnswers = "gfdsgfd";
        $instance = new Ranking();
        $instance->setTotalAnswers($invalidTotalAnswers);
        
    }
    
    public function testSetTotalAnswersShouldWork(){
        $validTotalAnswers = 2;
        $instance = new Ranking();
        $return = $instance->setTotalAnswers($validTotalAnswers);
        $this->assertAttributeEquals(
                $validTotalAnswers,
                'totalAnswers',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }
    
    public function testGetTotalAnswersShouldWork(){
        $validTotalAnswers = 3;
        $instance = new Ranking();
        $instance->setTotalAnswers($validTotalAnswers);
        $return = $instance->getTotalAnswers();
        $this->assertEquals(
                $return,
                $validTotalAnswers
                );
    }
    
    public function testSetNextLevelShouldWork() {
    	$instance = new Ranking();
    	$instance->setLevel(1)
    		->setNeedPoints(1000)
    		->setPoints(1001);
    	$instance->setNextLevel();
    	$this->assertAttributeEquals(
    			2,
    			'level',
    			$instance
    			);
    	$this->assertAttributeEquals(
    			1200,
    			'needPoints',
    			$instance
    			);
    }
    
}
