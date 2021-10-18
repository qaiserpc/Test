<?php

$router = $di->getRouter();

// Define your routes here
$router->add(
    '/users/create',
    [
        'controller' => 'users',
        'action'     => 'create',
    ]
);
$router->handle();
