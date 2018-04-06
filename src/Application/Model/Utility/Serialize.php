<?php

namespace Application\Model\Utility;

/**
 * Description of Serialize
 * Utility Class
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Serialize {
    
    public static function serialize($obj){
        return serialize($obj);
    }
    
    public static function unserialize($obj){
        return unserialize($obj);
    }
    
}
