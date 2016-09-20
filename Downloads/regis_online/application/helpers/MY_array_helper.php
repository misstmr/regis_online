<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_array_helper
 *
 * @author Dell
 */
class MY_array_helper {

    //put your code here
    function any_in_array($needle, $haystack) {
        $needle = is_array($needle) ? $needle : array($needle);

        foreach ($needle as $item) {
            if (in_array($item, $haystack)) {
                return TRUE;
            }
        }

        return FALSE;
    }

// random_element() is included in Array Helper, so it overrides the native function
    function random_element($array) {
        shuffle($array);
        return array_pop($array);
    }

}
