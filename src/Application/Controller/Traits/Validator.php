<?php

namespace Application\Controller\Traits;

/**
 * Description of Validator
 * Trait for Data Validation
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

trait Validator {
    
    public function verifyEmail($string){
        $account = "^[a-zA-Z0-9\._-]+@";
        $domain = "[a-zA-Z0-9\._-]+.";
        $extension = "[a-zA-Z]{2,4}";
        $pattern = $account.$domain.$extension;
        
        if(!preg_match($pattern, $string)){
            throw new \InvalidArgumentException(
                    "O Email não é válido"
                    );
        }
        return $string;     
    }
      
}
