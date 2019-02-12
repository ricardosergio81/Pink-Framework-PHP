<?php

/**
 * Pink Framework
 * Created by ricardosergio81
 * Layour class
 */
class Layout {

    function __construct() {
        
    }

    function load($contents = array(), $template = 'template') {
        foreach ($contents as $key => $val) {
            $new_contents['{' . $key . '}'] = $val;
        }

        ob_start();
        include 'views/' . $template . '.php';
        $buffer = ob_get_contents();
        @ob_end_clean();

        echo strtr($buffer, $new_contents);
    }

}
