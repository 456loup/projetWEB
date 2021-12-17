<?php

namespace services;

use PDOException;

class adminService{

	public static   $defautAdminService; 
	public static function getDefaultService(){
		
		if(adminService::$defautAdminService == null){
			adminService::$defautAdminService = new adminService(); 
		}
		return adminService::$defautAdminService; 
	}

    public static function chargerValeur($pdo , $texte , $typearticle , $truc , $prix , $nomArticle){

        $sql = "INSERT INTO article(texte , typearticle , truc , prix , nomArticle)  VALUES(:texte , :typearticle , :truc , :prix , :nomArticle) "; 
        $searchStmt = $pdo->prepare($sql); 
        $searchStmt->execute(['texte' => $texte , 
                                'typearticle' => $typearticle ,
                                 'truc' => $truc ,
                                   'prix' => $prix ,
                                 'nomArticle' => $nomArticle]); 

        return $searchStmt; 

    }
}

?>