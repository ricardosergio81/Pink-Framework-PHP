<?php

/**
 * Pink Framework
 * Created by ricardosergio81
 * Exception class
 */
class exceptions {

    function __construct() {
        
    }

    function show($message) {
        require_once BASEDIR . 'sys/error/default.php';
    }

}
