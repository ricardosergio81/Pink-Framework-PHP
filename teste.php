<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class ClassName {

    function __construct() {
        
    }

    function teste($param) {
        
    }

    function teste2($param) {
        
    }

}

class ClassName2 {

    function __construct() {
        
    }

    function teste3($param) {
        
    }

    function teste4($param) {
        
    }

}

class ClassName3 {

    function __construct() {
        
    }

    function teste3($param) {
        
    }

    function teste4() {
        echo 'teste4111';
    }

}

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

class ClassNameAll {

    var $_classes;

    function __construct() {

        foreach (is_loaded() as $key => $value) {
            $this->$key = & loadClasses($value);
        }
    }

}


$c1 = loadClasses('ClassName');
$c2 = loadClasses('ClassName2');
$c2 = loadClasses('ClassName3');



$pink = new ClassNameAll();
echo '<pre>';
var_dump($pink);
echo '<br>';
$pink->classname3->teste4();
