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
        echo 'Index Default';
        var_dump($this);
    }

}
