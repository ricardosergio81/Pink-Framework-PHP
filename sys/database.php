<?php

function &database() {

    function __construct() {
        
        require_once('config/database.php');

        require_once 'sys/database/db_mysql_pdo.php';

        $db = new db_mysql_pdo($db_config);
        return $db;
    }

}
