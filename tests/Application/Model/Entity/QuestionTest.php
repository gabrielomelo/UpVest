<?php

namespace Application\Model\Entity;

/**
 * Description of QuestionTest
 * Test for Entity Question
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

//use Classes\Model\Entity\Question;

class QuestionTest extends \PHPUnit_Framework_TestCase {
    public function testInstanciationWithoutArguments(){
        $instance = new Question();
        $this->assertInstanceOf(
                'Application\Model\Entity\Question',
                $instance);
    }

    /**
     * @depends testInstanciationWithoutArguments
     */

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A questão colocada não é válida
     */

    public function testSetQuestionShoulFail(){
        $invalidQuestion = "";
        $instance = new Question();
        $instance->setQuestion($invalidQuestion);
    }

    public function testSetQuestionShouldWork(){
        $validQuestion = "Are you allright?";
        $instance = new Question();
        $return = $instance->setQuestion($validQuestion);
        $this->assertAttributeEquals(
                $validQuestion,
                'question',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A alternativa não é válida
     */

    public function testSetAlternativeAShouldFail(){
        $invalidAlternative = "";
        $instance = new Question();
        $instance->setAlternativeA($invalidAlternative);
    }

    public function testSetAlternativeAShouldWork(){
        $validAlternative = "Yeah, I am allright";
        $instance = new Question();
        $return = $instance->setAlternativeA($validAlternative);
        $this->assertAttributeEquals(
                $validAlternative,
                'alternativeA',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }

    public function testGetAlternativeAShouldWork(){
        $validAlternative = "Yeah, I am allright";
        $instance = new Question();
        $instance->setAlternativeA($validAlternative);
        $return = $instance->getAlternativeA();
        $this->assertEquals(
                $return,
                $validAlternative
                );
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A alternativa não é válida
     */

    public function testSetAlternativeBShouldFail(){
        $invalidAlternative = "";
        $instance = new Question();
        $instance->setAlternativeB($invalidAlternative);
    }

    public function testSetAlternativeBShouldWork(){
        $validAlternative = "Yeah, I am allright";
        $instance = new Question();
        $return = $instance->setAlternativeB($validAlternative);
        $this->assertAttributeEquals(
                $validAlternative,
                'alternativeB',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }

    public function testGetAlternativeBShouldWork(){
        $validAlternative = "Yeah, I am allright";
        $instance = new Question();
        $instance->setAlternativeB($validAlternative);
        $return = $instance->getAlternativeB();
        $this->assertEquals(
                $return,
                $validAlternative
                );
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A alternativa não é válida
     */

    public function testSetAlternativeCShouldFail(){
        $invalidAlternative = "";
        $instance = new Question();
        $instance->setAlternativeC($invalidAlternative);
    }

    public function testSetAlternativeCShouldWork(){
        $validAlternative = "Yeah, I am allright";
        $instance = new Question();
        $return = $instance->setAlternativeC($validAlternative);
        $this->assertAttributeEquals(
                $validAlternative,
                'alternativeC',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }

    public function testGetAlternativeCShouldWork(){
        $validAlternative = "Yeah, I am allright";
        $instance = new Question();
        $instance->setAlternativeC($validAlternative);
        $return = $instance->getAlternativeC();
        $this->assertEquals(
                $return,
                $validAlternative
                );
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A alternativa não é válida
     */

    public function testSetAlternativeDShouldFail(){
        $invalidAlternative = "";
        $instance = new Question();
        $instance->setAlternativeD($invalidAlternative);
    }

    public function testSetAlternativeDShouldWork(){
        $validAlternative = "Yeah, I am allright";
        $instance = new Question();
        $return = $instance->setAlternativeD($validAlternative);
        $this->assertAttributeEquals(
                $validAlternative,
                'alternativeD',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }

    public function testGetAlternativeDShouldWork(){
        $validAlternative = "Yeah, I am allright";
        $instance = new Question();
        $instance->setAlternativeD($validAlternative);
        $return = $instance->getAlternativeD();
        $this->assertEquals(
                $return,
                $validAlternative
                );
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A resposta não é válida
     */

    public function testSetRightAnswerShouldFail(){
        $invalidRightAnswer = "";
        $instance = new Question();
        $instance->setRightAnswer($invalidRightAnswer);
    }

    public function testSetRightAnswerShouldWork(){
        $validRightQuestion = 1;
        $instance = new Question();
        $return = $instance->setRightAnswer($validRightQuestion);
        $this->assertAttributeEquals(
                $validRightQuestion,
                'rightAnswer',
                $instance
                );
        $this->assertEquals(
                $instance,
                $return
                );
    }

    public function testGetRightAnswerShouldWorks(){
        $validRightAnswer = 2;
        $instance = new Question();
        $instance->setRightAnswer($validRightAnswer);
        $return = $instance->getRightAnswer();
        $this->assertEquals(
                $validRightAnswer,
                $return
                );
    }
}
