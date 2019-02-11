<?php

function is_loaded($class = '') {
    static $_is_loaded = array();
    if ($class != '') {
        $_is_loaded[strtolower($class)] = $class;
    }
    return $_is_loaded;
}

function &load_classes($class) {

    static $_classes = array();

    if (isset($_classes[$class])) {
        return $_classes[$class];
    }
    
    require_once BASEDIR . 'sys/' . $class . '.php';

    is_loaded($class);

    $_classes[$class] = new $class();
    return $_classes[$class];
}

function show_error($message) {
    $error = load_classes('exceptions');
    echo $error->show($message);
    exit;
}
