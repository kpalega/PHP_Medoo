<?php

require_once 'core/Config.class.php';
$conf = new core\Config();
include 'config.php';

function &getConf() {global $conf; return $conf;}

require_once 'core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages() {global $msgs; return $msgs;}

$smarty = null;
function &getSmarty(){
    global $smarty;
    if(!isset($smarty)){
        include_once 'lib/smarty/Smarty.class.php';
        $smarty = new Smarty();
        $smarty->assign('conf', getConf());
        $smarty->assign('msgs', getMessages());
        $smarty->setTemplateDir(array(
           'one' => getConf()->root_path.'/app/view',
           'two' => getConf()->root_path.'/app/view/templates'
        ));
    }
    return $smarty;
}

require_once 'core\ClassLoader.class.php';
$cloader = new core\ClassLoader();
function &getLoader() {global $cloader; return $cloader;}

require_once 'core/Router.class.php'; //załaduj i stwórz router
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}

require_once 'core/functions.php';

session_start(); //uruchom lub kontynuuj sesję
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$router->setAction( getFromRequest('action') );