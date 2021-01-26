<?php

$router = $di->getRouter();

// Define your routes here

// Matches '/es/news'
$router->add(
    '/{language:[a-z]{2}}/',
    [
        'controller' => 'index',
        'action'     => 'index',
    ]
);

$router->handle();
