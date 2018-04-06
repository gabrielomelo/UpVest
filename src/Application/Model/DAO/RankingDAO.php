<?php

namespace Application\Model\DAO;
use Application\Model\Entity\Ranking;
use Application\Model\DataBase\Storage;

/**
 * Description of RankingDAO
 * Data Acess Object from Entity Ranking
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class RankingDAO {
    
    private $storage;
    
    public function __construct(Storage $storage) {
        $this->storage = $storage;
    }
    
    public function insert($id) {
        $stmt = $this->storage
                ->PDO->prepare(
                "INSERT INTO ranking(userId)"
                    . " VALUES (:id)"
                );
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }
        return false;
    }
    
    public function selectOne($id) {
        $stmt = $this->storage
                ->PDO->prepare(
                    "SELECT * FROM ranking"
                        . " WHERE id = :id"
                );
        $stmt->setFetchMode(\PDO::FETCH_CLASS, '\Application\Model\Entity\Ranking');
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        if($stmt->execute()){
            $ranking = $stmt->fetch();
        }
        if($ranking instanceof Ranking){
            return $ranking;
        }
        throw new \RuntimeException(
                'Cannot retrieve ranking'
                );
    }
    
    public function select($quantity) {
        $stmt = $this->storage
                ->PDO->prepare(
                    "SELECT users.name, ranking.level, ranking.points
                		FROM users INNER JOIN ranking
                		ON users.id = ranking.userId
                		ORDER BY (ranking.points) 
                		DESC LIMIT 0, :qtd"
                );
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->bindValue(':qtd', $quantity, \PDO::PARAM_INT);
        if($stmt->execute()){
            return $stmt->fetchAll();
        }
        throw new \RuntimeException(
                'Cannot retrieve data'
                );
    }
   
    public function delete($id) {
        $stmt = $this->storage
                ->PDO->prepare(
                    "DELETE FROM ranking"
                        . "WHERE id = :id"
                );
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }
        throw new \RuntimeException(
                'Cannot retrieve ranking'
                );
    }
    
    public function update(Ranking $ranking) {
        $stmt = $this->storage
                ->PDO->prepare(
                    "UPDATE ranking SET 
                        level = :level, points = :points, 
                        needPoints = :needPoints, difficulty = :difficulty, 
                        rightAnswers = :rightAnswers, totalAnswers = :totalAnswers
                		WHERE id = :id"
                );
        $stmt->bindValue(':level', $ranking->getLevel(), \PDO::PARAM_INT);
        $stmt->bindValue(':points', $ranking->getPoints(), \PDO::PARAM_INT);
        $stmt->bindValue(':needPoints', $ranking->getNeedPoints(), \PDO::PARAM_INT);
        $stmt->bindValue(':difficulty', $ranking->getDifficulty(), \PDO::PARAM_INT);
        $stmt->bindValue(':rightAnswers', $ranking->getRightAnswers(), \PDO::PARAM_INT);
        $stmt->bindValue(':totalAnswers', $ranking->getTotalAnswers(), \PDO::PARAM_INT);
        $stmt->bindValue(':id', $ranking->getId(), \PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }
        throw new \RuntimeException(
                'Cannot update ranking'
                );
    }
    
}
