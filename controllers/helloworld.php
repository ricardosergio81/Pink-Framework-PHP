<?php

class HelloWorld extends Core {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $array = array();
        $array['helloworld'] = 'Hello World';

        $this->layout->load($array, 'helloworld');

       # var_dump($this->db->query("show variables"));
    }

}
