<?php

namespace Application\Model\Services;

use Application\Model\Entity\User;
use Application\Model\DAO\UserDAO;
use Application\Model\DataBase\Storage;

/**
 * Description of DeleteAccount
 * Delete an user
 * @author Gabriel Melo <dev,gabrielomelo@gmail.com>
 */

class DeleteAccount {
	public static function delete(User $user) {
		$DAO = new UserDAO(new Storage());
		$DAO->delete($user);
	}
}