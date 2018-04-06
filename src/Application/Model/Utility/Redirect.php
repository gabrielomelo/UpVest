<?php

namespace Application\Model\Utility;

/**
 * Description of Redirect
 * Perform redirections
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */
    
class Redirect {
    
	const VIEW = "public_html";
    const ROOT = "..";
    const DS = \DIRECTORY_SEPARATOR;
    
    public static function inApp($page) {
    	header('location:'.$page);
    	die();
    }
    
}
