<?php
/**
 * サンプルコントローラ
 */
class IndexController extends \Phalcon\Mvc\Controller {
    /**
     *
     */
    public function indexAction() {
    }
    /**
     *
     */
    public function registAction() {
         $response = new \Phalcon\Http\Response();
         $response->setJsonContent(array(
            "status" => "OK",
         ));
         return($response);
    }
}
