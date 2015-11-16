<?php
$router = new \Phalcon\Mvc\Router(false);

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

//$router->setDefaultModule('backend');
//$router->setDefaultNamespace('Backend\Controllers');

//$router->setDefaultController('index');
//$router->setDefaultAction('default');
