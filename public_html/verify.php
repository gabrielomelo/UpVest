<?php
include 'bootstrap.php';
use Application\Model\Utility\Serialize;
use Application\Model\Entity\Question;
/**
 * beagles
 */

if(count($_POST) > 0) {
	
	$question = Serialize::unserialize($_SESSION['question']);
	$answer = (int) $_POST['answer'];
	if ($question->compareAnAnswer($answer)) {
		echo " certa";
	} else {
		echo " errada";
	}
	
}