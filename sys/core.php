<?php

class Core {

    private static $instance;

    function __construct() {

        self::$instance = & $this;

        foreach (is_loaded() as $key => $value) {
            $this->$key = & loadClasses($value);
        }
    }

    public static function &get_instance() {
        return self::$instance;
    }

}
