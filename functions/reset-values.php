<?php
    function resetValues($array) {
        $reset_array = array();

        foreach ($array as $empty) {
            $reset_array[$empty] = "";
        }

        return $reset_array;
    }
?>