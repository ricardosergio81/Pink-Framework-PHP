<?php

class Fist_page extends Core {

    function __construct() {
        parent::__construct();


        /*
         * 
          $pink->database = database();
          var_dump($pink);

          $pink->database->query("show variables");
          exit;
         * 
         */
    }

    function index() {
        $this->load('database');
        echo 'Index Default';
        echo '<br>';
        var_dump($this);

        var_dump($this->db->query("show variables"));
    }

}
