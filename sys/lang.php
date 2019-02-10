<?php

/**
 * Pink Framework
 * Created by ricardosergio81
 * Language class
 */
class Lang {

    private $language = array();

    function __construct() {
        
    }

    function load($language) {
        $langFile = 'languages/' . $language . '/default.php';

        if (!file_exists($langFile)) {
            $langFile = 'languages/pt_br/default.php'; //set default language
        }

        include ($langFile);

        $this->language = $lang;
    }

    function get($tag) {
        $text = 'Cold not find tag';

        if (isset($this->language[$tag])) {
            $text = $this->language[$tag];
        }
        return $text;
    }

}
