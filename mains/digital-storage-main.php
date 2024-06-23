<?php
    // Importing
    include("../functions/construct-values.php");
    include("../functions/reset-values.php");
    include("../converters/converter.php");

    // All values possible in form
    $values = array("bit", "byte", "kilobit", "kilobyte", "megabit",
                    "megabyte", "gigabit", "gigabyte", "terabit",
                    "terabyte");

    // Constructing our values for each radiobutton
    $x_values = constructValues($values, "x");
    $y_values = constructValues($values, "y");

    // Resetting values to remove other radiobuttons checked attribute
    $x_values = resetValues($x_values);
    $y_values = resetValues($y_values);
    
    // Extracting each value to turn into variables
    extract($x_values);
    extract($y_values);

    // Defaults
    $x_unit_header = "Bit";
    $x_bit_checked = "checked";
    $y_unit_header = "Bit";
    $y_bit_checked = "checked";

    $units = array("Bit", "Byte", "Kilobit", "Kilobyte", "Megabit",
                    "Megabyte", "Gigabit", "Gigabyte", "Terabit",
                    "Terabyte");

    // Create associative array of values and the names of the unit they 
    // represent
    $unitNames = array_combine($values, $units);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["x_unit"])) {
            // Adds checked attribute to chosen button
            $chosen = $_POST["x_unit"];
            $formatted_chosen = "x_{$chosen}_checked";
            $temp_array[$formatted_chosen] = "checked";
            extract($temp_array);

            // Set left header
            $x_unit_header = $unitNames[$chosen];
        }

        if (isset($_POST["y_unit"])) {
            $chosen = $_POST["y_unit"];
            $formatted_chosen = "y_{$chosen}_checked";
            $temp_array = array();
            $temp_array[$formatted_chosen] = "checked";
            extract($temp_array);

            // Set right header
            $y_unit_header = $unitNames[$chosen];
        }

        // Multidimensional array of formulas for each area unit
        $formulas = array(
            "bit" => [
                "bit" => " * 1",
                "byte" => " * 0.125",
                "kilobit" => " * 0.0009765625",
                "kilobyte" => " * 0.0001220703",
                "megabit" => " * 0.000001",
                "megabyte" => " * 0.000000125",
                "gigabit" => " * 0.000000001",
                "gigabyte" => " * 0.000000000125",
                "terabit" => " * 0.000000000001",
                "terabyte" => " * 0.000000000000125"
            ],
            "byte" => [
                "bit" => " * 8",
                "byte" => " * 1",
                "kilobit" => " * 0.008",
                "kilobyte" => " * 0.001",
                "megabit" => " * 0.000008",
                "megabyte" => " * 0.000001",
                "gigabit" => " * 0.000000008",
                "gigabyte" => " * 0.000000001",
                "terabit" => " * 0.000000000008",
                "terabyte" => " * 0.000000000001"
            ],
            "kilobit" => [
                "bit" => " * 1000",
                "byte" => " * 125",
                "kilobit" => " * 1",
                "kilobyte" => " * 0.125",
                "megabit" => " * 0.001",
                "megabyte" => " * 0.000125",
                "gigabit" => " * 0.000001",
                "gigabyte" => " * 0.000000125",
                "terabit" => " * 0.000000001",
                "terabyte" => " * 0.000000000125"
            ],
            "kilobyte" => [
                "bit" => " * 8000",
                "byte" => " * 1000",
                "kilobit" => " * 8",
                "kilobyte" => " * 1",
                "megabit" => " * 0.008",
                "megabyte" => " * 0.001",
                "gigabit" => " * 0.000008",
                "gigabyte" => " * 0.000001",
                "terabit" => " * 0.000000008",
                "terabyte" => " * 0.000000001"
            ],
            "megabit" => [
                "bit" => " * 1000000",
                "byte" => " * 125000",
                "kilobit" => " * 1000",
                "kilobyte" => " * 125",
                "megabit" => " * 1",
                "megabyte" => " * 0.125",
                "gigabit" => " * 0.001",
                "gigabyte" => " * 0.000125",
                "terabit" => " * 0.000001",
                "terabyte" => " * 0.000000125"
            ],
            "megabyte" => [
                "bit" => " * 8000000",
                "byte" => " * 1000000",
                "kilobit" => " * 8000",
                "kilobyte" => " * 1000",
                "megabit" => " * 8",
                "megabyte" => " * 1",
                "gigabit" => " * 0.008",
                "gigabyte" => " * 0.001",
                "terabit" => " * 0.000008",
                "terabyte" => " * 0.000001"
            ],
            "gigabit" => [
                "bit" => " * 1000000000",
                "byte" => " * 125000000",
                "kilobit" => " * 1000000",
                "kilobyte" => " * 125000",
                "megabit" => " * 1000",
                "megabyte" => " * 125",
                "gigabit" => " * 1",
                "gigabyte" => " * 0.125",
                "terabit" => " * 0.001",
                "terabyte" => " * 0.000125"
            ],
            "gigabyte" => [
                "bit" => " * 8000000000",
                "byte" => " * 1000000000",
                "kilobit" => " * 8000000",
                "kilobyte" => " * 1000000",
                "megabit" => " * 8000",
                "megabyte" => " * 1000",
                "gigabit" => " * 8",
                "gigabyte" => " * 1",
                "terabit" => " * 0.008",
                "terabyte" => " * 0.001"
            ],
            "terabit" => [
                "bit" => " * 1000000000000",
                "byte" => " * 125000000000",
                "kilobit" => " * 1000000000",
                "kilobyte" => " * 125000000",
                "megabit" => " * 1000000",
                "megabyte" => " * 125000",
                "gigabit" => " * 1000",
                "gigabyte" => " * 125",
                "terabit" => " * 1",
                "terabyte" => " * 0.125"
            ],
            "terabyte" => [
                "bit" => " * 8000000000000",
                "byte" => " * 1000000000000",
                "kilobit" => " * 8000000000",
                "kilobyte" => " * 1000000000",
                "megabit" => " * 8000000",
                "megabyte" => " * 1000000",
                "gigabit" => " * 8000",
                "gigabyte" => " * 1000",
                "terabit" => " * 8",
                "terabyte" => " * 1"
            ]
        );

        if (isset($_POST["x_number"]) && $_POST["x_number"] != '') {
            $converted_numbers = converter(
                $_POST["x_number"], 
                $_POST["x_unit"], 
                $_POST["y_unit"], 
                $formulas);

            $x_number = $converted_numbers[0];
            $y_number = $converted_numbers[1];
        }
    }
?>