<?php
class Bootstrap extends Yaf_Bootstrap_Abstract{ 
    public function _initConfig(Yaf_Dispatcher $dispatcher) {
        Yaf_Registry::set('config', Yaf_Application::app()->getConfig());
    }

    public function _initLoader(Yaf_Dispatcher $dispatcher) {
        Yaf_Loader::import(APPLICATION_PATH . "/vendor/autoload.php");
    }

    public function __initRoute(Yaf_Dispatcher $dispatcher){
        $router = Yaf_Dispatcher::getInstance()->getRouter();
        $router->addConfig(Yaf_Registry::get("config")->routes);
    }

    public function _initSmarty(Yaf_Dispatcher $dispatcher) {  
        //init smarty view engine   
        $smarty = new SmartyAdapter(null, Yaf_Registry::get("config")->get("smarty"));  
        $dispatcher->setView($smarty);  
    }  
}
