<?php

// Error Controller
// 
// Portalhaus SpA 2020
// Versión 1.0
// 
// Controlador que maneja los errores de portalhaus (Error 400, 500)
//

class ErrorController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function show404Action()
    {

    	$this->response->setStatusCode(200, 'Not Found');
    	$this->view->render("error","show404");
    }

    public function show500Action()
    {
        
    	//$this->response->setStatusCode(500, 'Error');
    	$this->view->render("error","show500");
    }

}

