<?php
    // "Cleans" the results by turning exponents into decimals
    function cleaner($x_number, $x_unit_chosen, $y_number, $y_unit_chosen) {
        switch ($x_unit_chosen) {
            case "sq_meter":
                if ($y_unit_chosen == "sq_km" && $x_number < 1000000) {
                    $y_number = rtrim(number_format(
                        $y_number, 6), 0);
                } elseif ($y_unit_chosen == "sq_mile" && $x_number < 1000000) {
                    $y_number = rtrim(number_format(
                        $y_number, 7), 0);
                }

                return $y_number;
                break;
            case "sq_cm":
                if ($y_unit_chosen == "sq_km" && $x_number < 1000000) {
                    $y_number = rtrim(number_format(
                        $y_number, 10), 0);
                } elseif ($y_unit_chosen == "hectare" && $x_number < 10000) {
                    $y_number = rtrim(number_format(
                        $y_number, 8), 0);
                } elseif ($y_unit_chosen == "sq_mile" && $x_number < 10000000) {
                    $y_number = rtrim(number_format(
                        $y_number, 14), 0);
                } elseif ($y_unit_chosen == "acre" && $x_number < 10000) {
                    $y_number = rtrim(number_format(
                        $y_number, 12), 0);
                }

                return $y_number;
                break;
            case "sq_yard":
                if ($y_unit_chosen == "sq_km" && $x_number < 1000) {
                    $y_number = rtrim(number_format(
                        $y_number, 10), 0);
                } elseif ($y_unit_chosen == "hectare" && $x_number < 100000) {
                    $y_number = rtrim(number_format(
                        $y_number, 10), 0);
                } elseif ($y_unit_chosen == "sq_mile" && $x_number < 10000000) {
                    $y_number = rtrim(number_format(
                        $y_number, 11), 0);
                }

                return $y_number;
                break;
            case "sq_foot":
                if ($y_unit_chosen == "sq_km" && $x_number < 10000) {
                    $y_number = rtrim(number_format(
                        $y_number, 13), 0);
                } elseif ($y_unit_chosen == "hectare" && $x_number < 1000000) {
                    $y_number = rtrim(number_format(
                        $y_number, 10), 0);                  
                } elseif ($y_unit_chosen == "sq_mile" && $x_number < 10000) {
                    $y_number = rtrim(number_format(
                        $y_number, 13), 0);
                } elseif ($y_unit_chosen == "acre" && $x_number < 10) {
                    $y_number = number_format(
                        $y_number, 10);
                }

                return $y_number;
                break;
            case "sq_inch":
                if ($y_unit_chosen == "sq_km" && $x_number < 1000000) {
                    $y_number = rtrim(number_format(
                        $y_number, 14), 0);
                } elseif ($y_unit_chosen == "hectare" && $x_number < 10000) {
                    $y_number = rtrim(number_format(
                        $y_number, 12), 0);
                } elseif ($y_unit_chosen == "sq_mile" && $x_number < 1000000) {
                    $y_number = rtrim(number_format(
                        $y_number, 13), 0);
                } elseif ($y_unit_chosen == "acre" && $x_number < 1000) {
                    $y_number = rtrim(number_format(
                        $y_number, 12), 0);
                }
                
                return $y_number;
                break;
            default:
                return $y_number;
        }
    }
?>