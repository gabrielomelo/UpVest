<?php

namespace Application\Model\DAO;
use Application\Model\DataBase\Storage;
use Application\Model\Entity\User;

/**
 * Description of UserDAO
 * Data Acess Object of User
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class UserDAO {
    
    private $storage;
    
    public function __construct(Storage $storage) {
        $this->storage = $storage;
    }
    
    public function insert(User $user) {
        $stmt = $this->storage->PDO->prepare(
                "INSERT into
                users (email, password, name, state)
                VALUES (:email, :password,
                :name, :state)");
        $stmt->bindValue(':email', $user->getEmail(), \PDO::PARAM_STR);
        $stmt->bindValue(':password', $user->getPassword(), \PDO::PARAM_STR);
        $stmt->bindValue(':name', $user->getName(), \PDO::PARAM_STR);
        $stmt->bindValue(':state', $user->getState(), \PDO::PARAM_STR);
        if($stmt->execute()){
            return (int) $this->storage
                    ->PDO->lastInsertId();
        }
        return false;
    }
     
    public function selectOne($id) {
		$stmt = $this->storage->PDO->prepare(
                "SELECT * FROM"
                . " users WHERE"
                . " id = :id"
                );
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Application\Model\Entity\User');
		$stmt->bindValue(':id', $id, \PDO::PARAM_INT);
	if($stmt->execute()){        
            $user = $stmt->fetch();
            if($user instanceof User){
                return $user; 
            } 
        }        
        throw new \RuntimeException(
                    "failed to bring user back"
                    );
    }
    
    public function selectByEmailAndPassword(User $user){
        $stmt = $this->storage
                ->PDO->prepare(
                    "SELECT *"
                    . " FROM users"
                    . " WHERE"
                    . " email = :email AND"
                    . " password = :password"
                );
        $stmt->setFetchMode(\PDO::FETCH_CLASS, '\Application\Model\Entity\User');
        $stmt->bindValue(':email', $user->getEmail(), \PDO::PARAM_STR);
        $stmt->bindValue(':password', $user->getPassword(), \PDO::PARAM_STR);
        if($stmt->execute()){
            $user = $stmt->fetch();
        }
        if($user instanceof User){
            return $user;
        }
        return false;
    }
    
    public function selectByEmail($email){
        $stmt = $this->storage
                ->PDO->prepare(
                        "SELECT * FROM"
                        . "users WHERE email = :email"
                        );
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        if($stmt->execute()){
        	return (int) $stmt->rowCount();
        }                 
    }
    
    public function update(User $user) {
        $stmt = $this->storage
                ->PDO->prepare(
                    "UPDATE users SET
                    email = :email,
                    password = :password,
                    name = :name,
                    state = :state
                    WHERE id = :id"
                );
        $stmt->bindValue(':email', $user->getEmail(), \PDO::PARAM_STR);
        $stmt->bindValue(':name', $user->getName(), \PDO::PARAM_STR);
        $stmt->bindValue(':state', $user->getState(), \PDO::PARAM_STR);
        $stmt->bindValue(':password', $user->getPassword(), \PDO::PARAM_STR);
        $stmt->bindValue(':id', $user->getId(), \PDO::PARAM_STR);
        if($stmt->execute()){
            return true;
        }
        throw new \RuntimeException(
                    "failed to update data"
                    );
    }
    
    public function delete(User $user) {
        $stmt = $this->storage
                ->PDO->prepare(
                        "DELETE FROM"
                        . " users"
                        . " WHERE id = :id"
                );
        $stmt->bindValue(':id', $user->getId(), \PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }
        throw new \RuntimeException(
                    "failed to delete data"
                    );
    }
    
}
