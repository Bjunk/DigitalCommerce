<?php

// Index Controller
// 
// Portalhaus SpA 2020
// Versión 1.0
// 
// Controlador que maneja las interacciones de la página central
//

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    	$message = array(
    		'en' => array('title' => 'Digital Commerce',
    				 'message1' => 'to sell your products and services globally',
    				 'message2' => 'We launched our Machine Learning Automated Commerce for any industry. Instant Provisioning.',
    				 'startnow' => 'START NOW',
    				 'features' => 'FEATURES',
                     'products' => 'OUR PRODUCTS',
                     'howworks' => 'HOW IT WORKS',
                     'ourclients' => 'OUR CLIENTS',
                     'testimonials' => 'TESTIMONIALS',
                     'support' => 'SUPPORT',
    				 'pricing' => 'PRICING',
    				 'home' => 'HOME',
    				 'lang' => 'English',
    				 'contact' => 'CONTACT',
    				 'login' => 'LOGIN',
    				 'getstarted' => 'GET STARTED',
                     'message3' => 'Start now your E-commerce in seconds with',
                     'description1' => 'The most advanced and automated E-commerce Platform provides a full experience with which users can manage the offers of products and services of their online business',
                     'message4' => 'Overcome Geographical Limitations',
                     'message5' => 'Remain Open All the Time',
                     'message6' => 'Sell more and Improve your User Experience',
                     'message7' => 'Reduce your OPEX'), 
    		'fr' => array('title' => 'Digital Commerce',
    				 'message1' => 'pour vendre vos produits et services dans le monde entier',
    				 'message2' => 'Nous avons lancé notre commerce automatisé d\'apprentissage automatique pour tous les secteurs. Approvisionnement instantanément.',
    				 'startnow' => 'COMMENCEZ MAINTENANT',
    				 'features' => 'FONCTIONNALITÉS',
                     'products' => 'NOS PRODUITS',
                     'howworks' => 'COMMENT ÇA FONCTIONNE',
                     'ourclients' => 'NOS CLIENTS',
                     'testimonials' => 'TÉMOIGNAGES',
                     'support' => 'SUPPORT',
    				 'pricing' => 'TARIFICATION',
    				 'home' => 'ACCUEIL',
    				 'lang' => 'Français',
    				 'contact' => 'CONTACT',
    				 'login' => 'S\'IDENTIFIER',
    				 'getstarted' => 'COMMENCER',
                     'message3' => 'Démarrez dès maintenant votre e-commerce en quelques secondes avec',
                     'description1' => 'La plateforme de commerce électronique la plus avancée et la plus automatisée offre une expérience complète avec laquelle les utilisateurs peuvent gérer les offres de produits et services de leur entreprise en ligne',
                     'message4' => 'Surmonter les limites géographiques',
                     'message5' => 'Restez ouvert tout le temps',
                     'message6' => 'Vendez plus et améliorez votre expérience utilisateur',
                     'message7' => 'Réduisez votre OPEX'),
    		'de' => array('title' => 'Digital Commerce',
    				 'message1' => 'um Ihre Produkte und Dienstleistungen weltweit zu verkaufen',
    				 'message2' => "Wir haben unseren automatisierten Handel für maschinelles Lernen für jede Branche eingeführt. Sofortige Bereitstellung.",
    				 'startnow' => 'JETZT ANFANGEN',
    				 'features' => 'FUNKTIONALITÄTEN',
                     'products' => 'UNSERE PRODUKTE',
                     'howworks' => 'WIE ES FUNKTIONIERT',
                     'ourclients' => 'UNSERE KUNDEN',
                     'testimonials' => 'REFERENZEN',
                     'support' => 'UNTERSTÜTZUNG',
    				 'pricing' => 'TARIFICATION',
    				 'home' => 'ACCUEIL',
    				 'lang' => 'Deutsche',
    				 'contact' => 'CONTACT',
    				 'login' => 'ANMELDUNG',
    				 'getstarted' => 'LOSLEGEN',
                     'message3' => 'Starten Sie jetzt Ihren E-Commerce in Sekunden mit',
                     'description1' => 'Die fortschrittlichste und automatisierteste E-Commerce-Plattform bietet eine umfassende Erfahrung, mit der Benutzer die Angebote von Produkten und Dienstleistungen ihres Online-Geschäfts verwalten können',
                     'message4' => 'Geografische Einschränkungen überwinden',
                     'message5' => 'Bleiben Sie die ganze Zeit offen',
                     'message6' => 'Verkaufen Sie mehr und verbessern Sie Ihre Benutzererfahrung',
                     'message7' => 'Reduzieren Sie Ihre OPEX'),
    		'es' => array('title' => 'Digital Commerce', 'message1' => 'vende tus productos y servicios globalmente',
    			'message2' => 'Lanzamos nuestro Commerce con Machine Learning para cualquier industria. Se provisiona instantatemente.',
    			'startnow' => 'COMIENZA AHORA',
    			'features' => 'CARACTERISTICAS',
                'products' => 'PRODUCTOS',
                'howworks' => '¿CÓMO FUNCIONA?',
                'ourclients' => 'CLIENTES',
                'testimonials' => 'REFERENCIAS',
                'support' => 'SOPORTE',
    			'pricing' => 'PRECIOS',
    			'home' => 'INICIO',
    			'lang' => 'Español',
    			'contact' => 'CONTACTO',
    			'login' => 'INICIAR SESIÓN',
    			'getstarted' => 'EMPEZAR',
                'message3' => 'Comience ahora su comercio electrónico en segundos con',
                'description1' => 'La plataforma de comercio electrónico más avanzada y automatizada que brinda una experiencia completa con la que los usuarios pueden administrar las ofertas de productos y servicios de su negocio en línea.',
                'message4' => 'Supere las limitaciones geográficas',
                'message5' => 'Permanezca abierto todo el tiempo',
                'message6' => 'Venda más y mejore su experiencia de usuario',
                'message7' => 'Reduzca su OPEX'),
    		'pt' => array('title' => 'Digital Commerce', 'message1' => 'para vender seus produtos e serviços globalmente',
    			'message2' => 'Lançamos nosso Machine Learning Automated Commerce para qualquer setor. Provisionamento instantaneamente',
    			'startnow' => 'COMECE AGORA',
    			'features' => 'CARACTERÍSTICAS',
                'products' => 'NOSSOS PRODUTOS',
                'howworks' => 'COMO FUNCIONA',
                'ourclients' => 'NOSSOS CLIENTES',
                'testimonials' => 'TESTEMUNHOS',
                'support' => 'APOIO, SUPORTE',
    			'pricing' => 'PREÇOS',
    			'home' => 'COMEÇAR',
    			'lang' => 'Português',
    			'contact' => 'CONTATO',
    			'login' => 'CONECTE-SE',
    			'getstarted' => 'INICIAR',
                'message3' => 'Comece seu e-commerce agora em segundos com',
                'description1' => 'A plataforma de comércio eletrônico mais avançada e automatizada que oferece uma experiência completa com a qual os usuários podem gerenciar as ofertas de produtos e serviços de seus negócios online.',
                'message4' => 'Supere as limitações geográficas',
                'message5' => 'Fique aberto o tempo todo',
                'message6' => 'Venda mais e melhore a experiência do usuário',
                'message7' => 'Reduza seu OPEX'),
    		'cn' => array('title' => 'Digital Commerce', 'message1' => '在全球范围内销售您的产品和服务',
    			'message2' => '我们针对任何行业推出了带有自动机器学习功能的Commerce。 它是即时配置的。',
    			'startnow' => '现在开始',
    			'features' => '特征',
    			'pricing' => '价格',
    			'home' => '开始',
    			'lang' => '中文',
    			'contact' => '联系',
    			'login' => '登录',
    			'getstarted' => '开始'),
    		'jp' => array('title' => 'Digital Commerce', 'message1' => '製品やサービスをグローバルに販売する',
    			'message2' => 'あらゆる業界向けに機械学習自動コマースを開始しました。 インスタントプロビジョニング。',
    			'startnow' => '今すぐ始める',
    			'features' => '特徴',
    			'pricing' => '价格',
    			'home' => 'ホームホーム',
    			'lang' => '日本人',
    			'contact' => '連絡先',
    			'login' => 'ログインする',
    			'getstarted' => '始めましょう'),
    		'it' => array('title' => 'Digital Commerce', 'message1' => 'per vendere i tuoi prodotti e servizi a livello globale',
    			'message2' => 'Abbiamo lanciato il nostro commercio con machine learning automatico per qualsiasi settore. Viene fornito istantaneamente.',
    			'startnow' => 'INIZIA ORA',
    			'features' => 'CARATTERISTICHE',
    			'pricing' => 'PREZZI',
    			'home' => 'INIZIO',
    			'lang' => 'Italiano',
    			'contact' => 'CONTATTO',
    			'login' => 'ACCESSO',
    			'getstarted' => 'INIZIO')
    		);

		$language = $this->dispatcher->getParam('language');
        $country = $this->dispatcher->getParam('country');


		if(is_null($language)){

			if(isset($_COOKIE["dxs"])){
				list($language,$country) = explode("-",$_COOKIE["dxs"]);
			} else {
			
			$ipaddress = getenv("REMOTE_ADDR");
			$url = 'http://ip-api.com/json/'.$ipaddress;

			$options = array(
		        CURLOPT_RETURNTRANSFER => true,     // return web page
		        CURLOPT_HEADER         => false,    // don't return headers
		        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
		        CURLOPT_ENCODING       => "",       // handle all encodings
		        CURLOPT_USERAGENT      => "spider", // who am i
		        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
		        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
		        CURLOPT_TIMEOUT        => 120,      // timeout on response
		        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
   			);

		    $ch      = curl_init( $url );
		    curl_setopt_array( $ch, $options );
		    $content = curl_exec( $ch );
		    $err     = curl_errno( $ch );
		    $errmsg  = curl_error( $ch );
		    $header  = curl_getinfo( $ch );
		    curl_close( $ch );
		    $response=(object)json_decode($content, true);
		    //var_dump($response);

		    if($response->{"status"} == "success"){
                $country = $response->{"countryCode"};
		    	switch ($response->{"country"}) {
		    		case 'Chile':
		    		case 'Argentina':
		    		case 'Bolivia':
		    		case 'Peru':
                    case 'Ecuador':
		    		case 'Paraguay':
		    		case 'Uruguay':
		    		case 'Venezuela':
		    		case 'Colombia':
		    		case 'Mexico':
		    		case 'Spain':
		    		case 'Panama':
		    		case 'Guatemala':
		    		case 'Costa Rica':
                    case 'El Salvador':
                    case 'Honduras':
                    case 'Nicaragua':
                    case 'Dominican Republic':
		    			$language = 'es';
		    			break;

		    		case 'Brazil':
		    		case 'Portugal':
		    			$language = 'pt';
		    			break;

		    		case 'France':
                    case 'Luxembourg':
                    case 'Monaco':
                    case 'Switzerland':
		    			$language = 'fr';
		    			break;

		    		case 'Germany':
                    case 'Austria':
		    			$language = 'de';
		    			break;

		    		case 'China':
		    			$language = 'cn';
		    			break;

		    		case 'Japan':
		    			$language = 'jp';
		    			break;

		    		case 'Italy':
		    			$language = 'it';
		    			break;
		    		
		    		default:
		    			$language = 'en';
		    			break;
		    	}
		     } else {
		    	$language = 'en';  
		    } 
			$total = $language."-".$country;

			setcookie("dxs",$total,strtotime("+1 week"),'/','dxs.cloud',true,true);
		}
            $this->response->redirect('/'.$language.'-'.$country.'/',true, 302);
			$this->view->disable();

		} else {

			$this->view->language = $language;
			$this->view->message  = $message;
            $this->view->country  = $country;

		}

    }


}
