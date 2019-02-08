<?php

require_once BASEDIR . 'sys/common.php';

require_once BASEDIR . 'sys/lang.php';
loadClasses('lang');

require_once BASEDIR . 'sys/core.php';

function &get_instance() {
    return Core::get_instance();
}

$requestUrl = $pref . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$requestString = substr($requestUrl, strlen($base_url));

$urlParams = explode('/', $requestString);

$controller = strtolower(array_shift($urlParams));
$controller = $controller != "" ? $controller : "fist_page";

$action = strtolower(array_shift($urlParams));
$action = $action != "" ? $action : 'index';

if (!file_exists(BASEDIR . 'controllers/' . $controller . '.php')) {
    echo 'ERROR_CONTROLLER_DOES_NOT_EXIST';
} else {
    include BASEDIR . 'controllers/' . $controller . '.php';
    $controller = new $controller();

    if (!method_exists($controller, $action)) {
        echo 'ERROR_CONTROLLER_ACTION_DOES_NOT_EXIST';
    } else {
        $controller->$action();
    }
}
