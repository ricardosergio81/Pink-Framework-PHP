<?php

class Fist_page extends Core {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load('layout');
        
        $array=  array();
        $array['contents']= 'teste';
        $array['while'][]['contents_while']= 'teste1';
        $array['while'][]['contents_while']= 'teste2';
        $array['contents2']= 'teste4';
        $array['while2'][]['contents_while2']= 'teste1';
        $array['while2'][]['contents_while2']= 'teste2';
        $array['contents3']= 'teste4';
        $this->layout->load($array);
    }

}
