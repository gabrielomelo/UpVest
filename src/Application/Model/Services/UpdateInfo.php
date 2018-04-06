<?php

namespace Application\Model\Services;

use Application\Model\Entity\User;
use Application\Model\DAO\UserDAO;
use Application\Model\DataBase\Storage;

/**
 * Description of Update Info
 * Update user info
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class UpdateInfo {
	
	private $user;
	
	public function __construct(User $user){
		$this->user = $user;
	}
	
	public function getService(){
		$DAO = new UserDAO(new Storage());
		$DAO->update($this->user);
	}
}
