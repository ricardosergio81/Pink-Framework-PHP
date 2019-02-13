<?php

class User_model extends model {

    function __construct() {
        parent::__construct();
    }

    function getUser() {
        var_dump($this->db->query("show variables;"));
    }

}
