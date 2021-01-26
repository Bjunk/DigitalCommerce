<?php

// Sitemap Controller
// 
// Portalhaus SpA 2020
// Versión 1.0
// 
// Controlador que maneja las interaciones con Google Search
//

class SitemapController extends ControllerBase
{

    public function indexAction()
    {
	    $this->view->disable();

      	    $this->response->setHeader('Content-Type', 'application/xml');
            echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
            echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
            echo "<url>\n";
            echo "<loc>https://www.portalhaus.cl/</loc>\n";
            echo "<lastmod>" . date("Y-m-d") . "</lastmod>\n";
            echo "<changefreq>always</changefreq>\n";
            echo "<priority>1</priority>\n";
            echo "</url>\n";
            echo "<url>\n";
            echo "<loc>https://www.portalhaus.cl/login/</loc>\n";
            echo "<lastmod>" . date("Y-m-d") . "</lastmod>\n";
            echo "<changefreq>always</changefreq>\n";
            echo "<priority>1</priority>\n";
            echo "</url>\n";
            echo "<url>\n";
            echo "<loc>https://www.portalhaus.cl/search/</loc>\n";
            echo "<lastmod>" . date("Y-m-d") . "</lastmod>\n";
            echo "<changefreq>always</changefreq>\n";
            echo "<priority>1</priority>\n";
            echo "</url>\n";
            echo "</urlset>\n";
    }
}