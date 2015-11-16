<?php

//use App\App\Controller;

/**
 * サンプルコントローラ
 */
class IndexController extends Phalcon\Mvc\Controller {
//class IndexController extends \Controller {
    /**
     * デフォルトページ
     */
    public function indexAction() {
         $response = new \Phalcon\Http\Response();
         $response->setStatusCode(200, "OK");
//         print get_class($this);exit;
//         return($response);
    }
    /**
     * 登録テスト
     */
    public function registAction() {
         $response = new \Phalcon\Http\Response();
         $response->setJsonContent(array(
            "status" => "OK",
         ));
         return($response);
    }
    /**
     *
     */
    public function testAction() {
        $page = new PageCache();
        $page->id = "/";
        $page->cache = "<xml><xml>";
        $page->save();
        $di = $this->getDI();
        $logger = $di->getShared('logger');
        $this->logger->log("msg", \Phalcon\Logger::INFO);
        $methods = get_class_methods($this);
        $this->logger->log(json_encode($methods), \Phalcon\Logger::INFO);
    }
    /**
     *
     */
    public function defaultAction($a=NULL) {
        $this->view->setMainView('index');
//      $this->view->set
    }
}
