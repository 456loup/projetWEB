<?php

namespace controllers;

use services\adminService; 
use yasmf\HttpHelper;
use yasmf\View;


class AdminController{

	private $AdminService;
	public function  __construct(){
		$this->AdminService = adminService::getDefaultService(); 
	}

    public function index($pdo){
                
        $searchStmt = ""; 
        $view = new View("GeekRuthenois\\view\\AdminVente.php"); 
        $view->setVar('searchStmt' , $searchStmt); 
        return $view; 
    }

    public function chargerValeur($pdo){

        $texte = HttpHelper::getParam('texte'); 
        $typearticle = HttpHelper::getParam('typearticle'); 
        $truc = HttpHelper::getParam('truc'); 
        $prix = HttpHelper::getParam('prix'); 
        $nomArticle = HttpHelper::getParam('nomArticle'); 


        $searchStmt = $this->AdminService->chargerValeur($pdo , $texte , $typearticle , $truc , $prix , $nomArticle);
        $view = new View("GeekRuthenois\\view\\AdminVente.php"); 
        $view->setVar('searchStmt' , $searchStmt); 
        return $view;  
    }


}

?> 