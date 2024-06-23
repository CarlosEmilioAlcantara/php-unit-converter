<?php
    // Import the cleaner function to ensure decimals are 
    // used in very small numbers
    include("../functions/cleaner.php");

    function converter($x_number, $x_unit, $y_unit, $formulas) {
        $i = 0;

        // This works by going iterating through each possible x unit
        // and the formulas for converting them into y unit
        foreach ($formulas as $formula) {
            // Get the units to convert from
            $x_unit_chosen = key(array_slice($formulas, $i));
            // Get the keys of the formulas
            $keys = array_keys($formula);

            foreach ($keys as $key) {
                // Get the unit to convert to
                $y_unit_chosen = $key;

                // If the unit to convert from and to is found then convert
                if ($x_unit == $x_unit_chosen && $y_unit == $y_unit_chosen) {
                    // Create our equation
                    $equation = "{$x_number} 
                        {$formulas[$x_unit_chosen][$y_unit_chosen]}";

                    // Find out which operator is used and calculate accordingly
                    if (preg_match(
                        '/(\d*\.?\d*)(?:\s*)([\*\/])(?:\s*)(\d\.?\d*)/',
                        $equation,
                        $matches)
                        !== FALSE) {
                            $operator = $matches[2];

                            switch ($operator) {
                                case "*":
                                    $y_number = $matches[1] * $matches[3];
                                    break;
                                case "/":
                                    $y_number = $matches[1] / $matches[3];
                                    break;
                            }
                    }

                    // Use decimals instead of negative exponents
                    $y_number = cleaner(
                        $x_number, 
                        $x_unit_chosen, 
                        $y_number, 
                        $y_unit_chosen
                    );
                }
            }

            $i++;
        }

        // Return in an array the number to convert from and its conversion
        return array($x_number, $y_number);
    }
?>