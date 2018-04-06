<?php

use Application\Model\Services\RankingInfo;

/**
 * Description of Update Ranking
 * Handle the request for a service
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class UpdateRanking {
	
	private $request;
	
	public function __construct(Array $request) {
		$this->request = $request;
	}
	
	public function getService() {
		return RankingInfo::getInfo(10);
	}
	
}