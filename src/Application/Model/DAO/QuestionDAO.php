<?php

namespace Application\Model\DAO;
use Application\Model\DataBase\Storage;
use Application\Model\Entity\Question;

/**
 * Description of QuestionDAO
 * Data Acess Object of Entity Question
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class QuestionDAO {
    
    private $storage;
    
    public function __construct(Storage $Storage) {
        $this->storage = $Storage;
    }
    
    public function insert(Question $question) {
        
    }
    
    public function fetchOne($id) {
		$stmt = $this->storage->PDO->prepare(
				"SELECT * FROM questions
				LEFT JOIN answers ON (questions.id = answers.id)
				WHERE questions.id = :id"
				);    	
		$stmt->setFetchMode(\PDO::FETCH_CLASS, 'Application\Model\Entity\Question');
		$stmt->bindValue(':id', $id, \PDO::PARAM_INT);
		if($stmt->execute()){
			$question = $stmt->fetch();
		}
		if($question instanceof Question){
			return $question;
		}		
    }
    
    public function selectIds($disciplineId) {
        $stmt = $this->storage->PDO->prepare(
        		"SELECT questions.id FROM questions
				LEFT JOIN answers ON (questions.id = answers.id)
				WHERE disciplineId = :disciplineId
        		ORDER BY (RAND(questions.id)) desc LIMIT 0,6"
        		);
        $stmt->bindValue(':disciplineId', $disciplineId, \PDO::PARAM_INT);
        if($stmt->execute()){
        	return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }        
    }
    
    public function update() {
        
    }
    
    public function delete() {
        
    }
    
}