<?php

// Index Controller
// 
// Portalhaus SpA 2020
// Versión 1.0
// 
// Controlador que maneja las interacciones de la página central
//

require APP_PATH . '/library/init.php';

use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;

class CartController extends ControllerBase
{

    public function indexAction()
    {
        $this->response->setHeader('Cache-Control', 'max-age=0');

    	$transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
               ->getNormalTransaction();

        // Monto Transacción 
        // Si es USD puede llevar 2 decimales
        // En CLP no llega decimales
        $amount = 15400;

        // Identificador que será retornado en el callback de resultado:
        // Creamos SessionID de 16 caracteres
        $sessionId = "1234567890";

        // Identificador único de orden de compra: 26 caracteres maximo
        $buyOrder = rand;

        // URL Callback
        $returnUrl = "https://demo.dxs.cloud/cart/return/";
        $finalUrl = "https://demo.dxs.cloud/cart/voucher/";

        // Iniciamos la transacción
        $initResult = $transaction->initTransaction(
                $amount, $buyOrder, $sessionId, $returnUrl, $finalUrl);

        // Retorno:
        // URL Largo 256 maximo
        $formAction = $initResult->url;
        // Token largo 64 maximo
        $tokenWs = $initResult->token;

        $this->view->amount = $amount;
        $this->view->buyOrder = $buyOrder;
        $this->view->formAction = $formAction;
        $this->view->tokenWs = $tokenWs;

    }


}
