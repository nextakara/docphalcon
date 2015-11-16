<?php

use Phalcon\DI;
use Phalcon\DI\FactoryDefault;

ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT_PATH', __DIR__);
define('APP_PATH', realpath('.'));

set_include_path(
    ROOT_PATH . PATH_SEPARATOR . get_include_path()
);

// phalcon/incubator のために必要
include __DIR__ . "/../vendor/autoload.php";

$config = include APP_PATH . "/app/config/config.php";

// アプリケーションのオートローダを使用してクラスをオートロードする
// composerの依存関係をオートロードする
include APP_PATH . "/app/config/loader.php";
$registerDirs = $loader->getDirs();
$registerDirs[] = __DIR__;
$loader->registerDirs( $registerDirs );
$loader->register();

