<?php

namespace services;

use PDOException;

class userservice{

	public static $defautUserService; 
	public static function getDefaultService(){
		
		if(userservice::$defautUserService == null){
			userservice::$defautUserService = new userservice(); 
		}
		return userservice::$defautUserService; 
	}

	public static function afficherTout($pdo){
		$sql = "SELECT * FROM article"; 
		$searchStmt = $pdo->prepare($sql); 
		$searchStmt->execute(); 
		return $searchStmt; 
	}

    public static function afficherArticleSpecifique($pdo , $typeArticle){

        $sql = "SELECT * FROM article WHERE typeArticle = :typeEnt "; 
        $searchStmt = $pdo->prepare($sql); 
        $searchStmt->execute(['typeEnt' => $typeArticle]); 
        return $searchStmt; 
    
    }


}

?> 