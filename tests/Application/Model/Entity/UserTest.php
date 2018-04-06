<?php

namespace Application\Model\Entity; 

/**
 * Description of SignUPTest
 * Test Class of entity User
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

use Application\Model\Entity\User;

class UserTest extends \PHPUnit_Framework_TestCase{

    public function testInstantiationWithNoArguments(){
        $instance = new User();
        $this->assertInstanceOf('Application\Model\Entity\User',
               $instance
                );
    }
    /**
     * @depends testInstantiationWithNoArguments
     */
    
    /**
     * 
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage O nome é obrigatório
     */
    
    public function testSetNameWithInvalidData() {
        $invalidName = "";
        $instance = new User();
        $instance->setName($invalidName);
    }
    
    public function testSetNameWithValidData(){
        $instance = new User();
        $name = "Gabriel Melo";
        $return  = $instance->setName($name);
        $this->assertEquals($instance, 
                $return,
                'O retorno tem que ser referente a mesma classe instanciada para encadear'
                );
        $this->assertAttributeEquals($name,
                'name',
                $instance,
                'O nome não foi definido'
                );
    }
    
    public function testGetNameShouldWork(){
        $instance = new User();
        $name = "Gabriel Melo";
        $return = $instance->setName($name)
                ->getName();
        $this->assertEquals(
                $name,
                $return,
                "The attribute was correctly get"
                );
    }
    
    /** 
     * 
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage O Email é obrigatório
     */
    
    public function testSetEmailWithInvalidData() {
        $invalidEmail = "";
        $instance = new User();
        $instance->setEmail($invalidEmail);
    }
    
    public function testSetEmailWithValidData(){
        $validEmail = "gabriel.omelo@outlook.com";
        $instance = new User();
        $return = $instance->setEmail($validEmail);
        $this->assertEquals($instance, 
                $return,
                'O retorno tem que ser referente a mesma classe instanciada para encadear'
                );
        $this->assertAttributeEquals(
            $validEmail,
                'email',
                $instance,
                'The attribute was not correctly set'
                );
    }
    
    public function testGetEmailShouldWork(){
        $instance = new User();
        $email = "dev.gabrielomelo@gmail.com";
        $return = $instance->setEmail($email)
                ->getEmail();
        $this->assertEquals(
                $email,
                $return,
                "The attribute was correctly get"
                );
        
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage O estado colocado não é válido
     */
    
    public function testSetStateWithInvalidData(){
        $invalidState = 45645;
        $instance = new User();
        $instance->setState($invalidState);
    }
    
    public function testSetStateWithAValidData(){
        $validState = "sp";
        $instance = new User();
        $return = $instance->setState($validState);
        $this->assertEquals($instance, 
                $return,
                'O retorno tem que ser referente a mesma classe instanciada para encadear'
                );
        $this->assertAttributeEquals(
                $validState,
                'state',
                $instance,
                'The Attribute was not correctly set'
                );
    }
    
    public function testGetStateShouldWork(){
        $state = "sp";
        $instance = new User();
        $return = $instance->setState($state)
                ->getState();
        $this->assertEquals(
                $state,
                $return,
                "The attribute was correctly get"
                );
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A senha colocada não é válida
     */
    
    public function testSetPasswordWithInvalidData(){
        $invalidPasswd = 546456;
        $instance = new User(); 
        $instance->setPassword($invalidPasswd);
    }
    
    public function testSetPasswordWithAValidData(){
        $validPasswd = "546456";
        $instance = new User();
        $return = $instance->setPassword($validPasswd);
        $this->assertEquals(
                $instance,
                $return,
                'O retorno tem que ser referente a mesma classe instanciada para encadear'
                );
        $this->assertAttributeEquals($validPasswd,
                'password',
                $instance,
                'The attribute was not correctly set'                
                );
    }
    
    public function testGetPasswordShoulWork(){
        $passwd = "senha";
        $instance = new User();
        $return = $instance->setPassword($passwd)
                ->getPassword();
        $this->assertEquals(
                $passwd, 
                $return,
                "The attribute was correctly get"
                );
    }
    
}