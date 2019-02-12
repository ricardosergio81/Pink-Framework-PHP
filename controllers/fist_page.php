<?php

class Fist_page extends Core {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load('layout');
        
        $this->layout->load(array("contents"=>'teste'));
    }

}
