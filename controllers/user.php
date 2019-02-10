<?php

class User extends Core {

    function __construct() {
        parent::__construct();
    }

    function index() {
        echo 'index';
    }

    function creat() {
        echo 'creat';
        echo array_shift();
    }

    function exe_creat() {
        
    }

    function alter() {
        
    }

    function exe_alter() {
        
    }

}
