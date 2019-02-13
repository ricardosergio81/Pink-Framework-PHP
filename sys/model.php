<?php

class model {

    function __construct() {
        
    }

    function __get($key) {
        $CI = & get_instance();
        return $CI->$key;
    }

}
