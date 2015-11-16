<?php

use Phalcon\DI;
use Phalcon\Test\FunctionalTestCase  as PhalconTestCase;

abstract class UnitTestCase extends PhalconTestCase
{
    /**
     * @var \Voice\Cache
     */
    protected $_cache;

    /**
     * @var \Phalcon\Config
     */
    protected $_config;

    /**
     * @var bool
     */
    private $_loaded = false;

    public function setUp(Phalcon\DiInterface $di = NULL, Phalcon\Config $config = NULL)
    {
        // テスト中に必要になる追加のサービスを読み込み
        $config = include APP_PATH . "/app/config/config.php";
        include APP_PATH . "/app/config/services.php";

        // ここで必要なDIコンポーネントを取得する。config があるなら、それを parent に渡すことを忘れずに
        parent::setUp($di, $config);

        $this->_loaded = true;
    }

    /**
     * Check if the test case is setup properly
     *
     * @throws \PHPUnit_Framework_IncompleteTestError;
     */
    public function __destruct()
    {
        if (!$this->_loaded) {
            throw new \PHPUnit_Framework_IncompleteTestError('Please run parent::setUp().');
        }
    }
}
