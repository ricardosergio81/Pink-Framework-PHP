<?php

class Languages {

    private $language = array();

    function __construct($language) {

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
