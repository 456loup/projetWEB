<?php 

namespace services; 

use PDOException; 

class ConnexionService{

    public static $defautConnexionService; 
    public static function getDefaultConnexionService(){

        if(ConnexionService::$defautConnexionService == null ){
            ConnexionService::$defautConnexionService = new ConnexionService(); 
        }
        return ConnexionService::$defautConnexionService; 
    }

    public static function connexionUtilisateurService($pdo , $identifiant , $motDePasse){

        $sql = "SELECT * FROM users WHERE identifiant = :identifiant AND   motDePasse =  :motDePasse "; 
        $searchStmt = $pdo->prepare($sql); 
        $searchStmt->execute(["identifiant" => $identifiant , "motDePasse" => $motDePasse]); 
        
        if($searchStmt->rowCount() > 0){
            return true; 
        }
        return false; 
    }

    public static function deconnexionUtilisateurService($pdo , $identifiant , $motDePasse){
        unset($_SESSION["user"]); 
    }

}




?>