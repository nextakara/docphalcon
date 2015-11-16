<?php
defined('APP_PATH') || define('APP_PATH', realpath('.'));

switch(true) {
case (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV']=="circleci"):
    $database = array(
        'adapter'     => 'Mysql',
        'host'        => '172.17.0.1',
        'username'    => 'ubuntu',
        'password'    => '',
        'dbname'      => 'mysql',
        'charset'     => 'utf8',
    );
    break;
default:
    $database = array(
        'adapter'     => 'Mysql',
        'host'        => '172.17.42.1',
        'username'    => 'phalcon',
        'password'    => '',
        'dbname'      => 'phalcon',
        'charset'     => 'utf8',
    );
    break;
}


return new \Phalcon\Config(array(
    'database' => $database,
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'configDir'      => APP_PATH . '/app/config/',
        'classesDir'     => APP_PATH . '/app/classes/',
        'logDir'         => '/var/log/phalcon/',
        'baseUri'        => '/sample1/',
    )
));
