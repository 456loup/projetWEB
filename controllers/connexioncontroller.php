<?php
namespace controllers;

use services\userservice;
use services\ConnexionService; 
use yasmf\HttpHelper;
use yasmf\View;

class ConnexionController{

    private $connexion; 
    private $userService;
    public function  __construct(){
        $this->connexion = ConnexionService::getDefaultConnexionService(); 
        $this->userService = UserService::getDefaultService(); 
    }

    public function index($pdo){    
        $view = new View("GeekRuthenois\\view\\connexionUtilisateur.php"); 
        return $view; 
    }

    public function connecterUtilisateur($pdo){

        $identifiant = HttpHelper::getParam("Identifiant"); 
        $motDePasse = HttpHelper::getParam("motDePasse");

        if($this->connexion->connexionUtilisateurService($pdo , $identifiant , $motDePasse)){
            $searchStmt = $this->userService->afficherTout($pdo); 
            $view = new View("GeekRuthenois\\view\\MaterielVente.php"); 
            $view->setVar('searchStmt' , $searchStmt); 
            return $view; 
        }
        echo "<h1> TU PENSAIS VRAIMENT QUE TU POUVAIS ARRIVER EN TOURISTE COMME CA ????? TES IDENTIFIANTS 
        SONT INCORRECTS RECOMMENCE CA TOUT DE SUITE  </h1>"; 
        $view = new View("GeekRuthenois\\view\\connexionUtilisateur.php"); 
        $view->setVar("identifiant" , $identifiant); 
        return $view; 
    }

    public function deconnecterUtilisateur(){

        unset($_SESSION["identifiant"]); 
        $view = new View("GeekRuthenois\\view\\connexionUtilisateur.php"); 
        $view->setVar("identifiant" , $identifiant); 
        return view; 
    }
}


?>