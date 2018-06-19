<?php
    //FRONT CONTROLLER

    //1. General properties
        ini_set('display_errors',1);
        error_reporting(E_ALL);

    //2. Connection system files
        define('ROOT', dirname(__FILE__));
        require_once(ROOT.'/components/Router.php');
        require_once(ROOT.'/components/db.php');

    //3. Installation connection with DB

    //4. Call Router
        $router = new Router();
        $router->run();

?>