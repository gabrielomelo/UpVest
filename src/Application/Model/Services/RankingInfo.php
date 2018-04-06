<?php

namespace Application\Model\Services;

use Application\Model\DAO\RankingDAO;
use Application\Model\DataBase\Storage;

/**
 * Description of UpdateInfo
 * Bring Info of Ranking to view
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class RankingInfo {
	public static function getInfo($quantity) {
		$DAO = new RankingDAO(new Storage());
		return $DAO->select($quantity);
	}
}