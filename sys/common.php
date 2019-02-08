<?php

function is_loaded($class = '') {
    static $_is_loaded = array();
    if ($class != '') {
        $_is_loaded[strtolower($class)] = $class;
    }
    return $_is_loaded;
}

function &loadClasses($class) {

    static $_classes = array();

    if (isset($_classes[$class])) {
        return $_classes[$class];
    }
    is_loaded($class);

    $_classes[$class] = new $class();
    return $_classes[$class];
}
