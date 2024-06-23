<?php
    // Creates the values for the radiobuttons
    function constructValues($source, $target) {
        $new_values = array();

        foreach ($source as $value) {
            $value = "{$target}_" . $value . "_checked";
            array_push($new_values, $value);
        }

        return $new_values;
    }
?>