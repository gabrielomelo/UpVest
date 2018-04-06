<?php 

namespace Application\Model\Utility;

/**
 * Description of Translate
 * Translate functions for GUI
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Translate {
	public static function getStateName($uf) {
		
		$states = Array (
				"ac"=>"Acre",
				"al"=>"Alagoas",
				"am"=>"Amazonas",
				"ap"=>"Amapá",
				"ba"=>"Bahia",
				"ce"=>"Ceará",
				"df"=>"Distrito Federal",
				"es"=>"Espírito Santo",
				"go"=>"Goiás",
				"ma"=>"Maranhão",
				"mt"=>"Mato Grosso",
				"ms"=>"Mato Grosso do Sul",
				"mg"=>"Minas Gerais",
				"pa"=>"Pará",
				"pb"=>"Paraíba",
				"pr"=>"Paraná",
				"pe"=>"Pernambuco",
				"pi"=>"Piauí",
				"rj"=>"Rio de Janeiro",
				"rn"=>"Rio Grande do Norte",
				"ro"=>"Rondônia",
				"rs"=>"Rio Grande do Sul",
				"rr"=>"Roraima",
				"sc"=>"Santa Catarina",
				"se"=>"Sergipe",
				"sp"=>"São Paulo",
				"to"=>"Tocantins"
				);
		
		foreach ($states as $state => $stateName) {
			if ($state === $uf) {
				return $stateName;
			}
		}
	}
	
	public static function getDiscName($disciplineId){
		$disciplines = Array (
				"1"=>"Português",
				"2"=>"Matemática",
				"3"=>"História",
				"4"=>"Geografia",
				"5"=>"Física",
				"6"=>"Sociologia",
				"7"=>"Filosofia",
				"8"=>"Química",
				"9"=>"Arte",
				"10"=>"Biologia"				
				);
		
		foreach ($disciplines as $id => $disc) {
			if ($disciplineId == $id) {
				return $disc;
			}
		}
	}
}