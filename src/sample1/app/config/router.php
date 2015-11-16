<?php
$router = new \Phalcon\Mvc\Router();

/**
 *  /
 */
$router->add(
    '/regist',
    array(
        'controller' => 'index',
        'action'     => 'regist',
    )
);

$router->add(
    '/test',
    array(
        'controller' => 'index',
        'action'     => 'test',
    )
);
