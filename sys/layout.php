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

        ob_start();
        include 'views/' . $template . '.php';
        $buffer = ob_get_contents();
        @ob_end_clean();


        $new_contents = array();

        foreach ($contents as $key => $val) {
            if (is_array($val)) {

                preg_match_all(
                        '#' . preg_quote('{' . $key . '}') . '(.+?)' . preg_quote('{/' . $key . '}') . '#s', $buffer, $matches, PREG_SET_ORDER
                );
                
                foreach ($matches as $match) {
                    $str = '';
                    foreach ($val as $row) {
                        $temp = array();
                        foreach ($row as $key2 => $val2) {
                            $temp['{' . $key2 . '}'] = $val2;
                        }
                        $str .= strtr($match[1], $temp);
                    }
                    $new_contents[$match[0]] = $str;
                }
            } else {
                $new_contents['{' . $key . '}'] = $val;
            }
        }


        echo strtr($buffer, $new_contents);
    }

}
