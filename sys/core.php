<?php

/**
 * Pink Framework
 * Created by ricardosergio81
 */
class Core {

    private static $instance;

    function __construct() {

        self::$instance = & $this;

        foreach (is_loaded() as $key => $value) {
            $this->$key = & load_classes($value);
        }
        $this->autoload();
    }

    public static function &get_instance() {
        return self::$instance;
    }

    function load($class, $type = 'sys') {
        if ($type == 'model') {
            load_classes('model');

            require_once BASEDIR . 'model/' . $class . '.php';
            $this->$class = new $class();
        } else if ($class == 'database') {
            require_once(BASEDIR . 'config/database.php');
            require_once BASEDIR . 'sys/database/db_mysql_pdo.php';
            $this->db = new db_mysql_pdo($db_config);
        } else {
            require_once BASEDIR . 'sys/' . $class . '.php';
            $this->$class = new $class();
        }
    }

    private function autoload() {

        require_once(BASEDIR . 'config/autoload.php');
        foreach ($autoload as $value) {
            $this->load($value);
        }
    }

}
