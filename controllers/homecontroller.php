<?php

namespace controllers;

use services\userservice;
use yasmf\HttpHelper;
use yasmf\View;

class HomeController{

	private $userService;
	public function  __construct(){
		$this->userService = UserService::getDefaultService(); 
	}

    public function  index($pdo){

        $typeArticle = HttpHelper::getParam('typeArticle'); 
        if(isset($typeArticle) && !empty($typeArticle)){
            $searchStmt = $this->userService->afficherArticleSpecifique($pdo , $typeArticle); 
        }else{
            $searchStmt = $this->userService->afficherTout($pdo); 
        }
        $view = new View("GeekRuthenois\\view\\MaterielVente.php"); 
        $view->setVar('searchStmt' , $searchStmt); 
        return $view; 
    }





    
}


?>