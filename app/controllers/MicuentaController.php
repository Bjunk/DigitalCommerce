<?php

// Index Controller
// 
// Portalhaus SpA 2020
// Versión 1.0
// 
// Controlador que maneja las interacciones de la página central
//

class MicuentaController extends ControllerBase
{

    public function indexAction()
    {

    	if($this->session->has("dxs_demo"))
    	{

    	} else {
    		$this->response->redirect('/login/', true, 302);
    	}

    }

    public function mispedidosAction()
    {

    }


}
