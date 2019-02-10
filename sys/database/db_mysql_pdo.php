<?php

class db_mysql_pdo {

    private $instance;
    private $username;
    private $password;
    private $hostname;
    private $database;

    function __construct($params) {
        if (is_array($params)) {
            foreach ($params as $key => $val) {
                $this->$key = $val;
            }
        }
    }

    private function getInstance() {
        if (!isset($this->instance)) {
            $this->instance = new PDO('mysql:host=' . $this->hostname . ';dbname=' . $this->database . '', '' . $this->username . '', '' . $this->password . '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return $this->instance;
    }

    public function query($query) {
        if ($query == '') {
            return false;
        } else {
            $p_sql = $this->getInstance()->prepare($query);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

}
