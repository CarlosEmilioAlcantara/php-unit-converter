<?php
    // Importing
    include("../functions/construct-values.php");
    include("../functions/reset-values.php");
    include("../converters/converter.php");

    // All values possible in form
    $values = array("teaspoon", "tablespoon", "cup", "fl_oz_us", "fl_oz_uk",
                    "pint_us", "pint_uk", "quart_us", "quart_uk", "gallon_us",
                    "gallon_uk", "milliliter", "liter");

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
    $x_unit_header = "Teaspoon";
    $x_teaspoon_checked = "checked";
    $y_unit_header = "Teaspoon";
    $y_teaspoon_checked = "checked";

    $units = array("Teaspoon", "Tablespoon", "Cup", "Fluid Ounce (US)",
                   "Fluid Ounce (UK)", "Pint (US)", "Pint (UK)", "Quart (US)",
                   "Quart (UK)", "Gallon (US)", "Gallon (UK)", "Milliliter", 
                   "Liter"
    );

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
            "teaspoon" => [
                "teaspoon" => " * 1",
                "tablespoon" => " * 0.333333",
                "cup" => " * 0.0208333",
                "fl_oz_us" => " * 0.166667",
                "fl_oz_uk" => " * 0.173474",
                "pint_us" => " * 0.0105668821",
                "pint_uk" => " * 0.0086736894",
                "quart_us" => " * 0.00520833",
                "quart_uk" => " * 0.00433684",
                "gallon_us" => " * 0.0013020833",
                "gallon_uk" => " * 0.0010842112",
                "milliliter" => " * 4.9289215937",
                "liter" => " * 0.0049289216"
            ],
            "tablespoon" => [
                "teaspoon" => " * 3",
                "tablespoon" => " * 1",
                "cup" => " * 0.0625",
                "fl_oz_us" => " * 0.5",
                "fl_oz_uk" => " * 0.5204213654",
                "pint_us" => " * 0.03125",
                "pint_uk" => " * 0.0260210683",
                "quart_us" => " * 0.015625",
                "quart_uk" => " * 0.0130105341",
                "gallon_us" => " * 0.00390625",
                "gallon_uk" => " * 0.0032526335",
                "milliliter" => " * 14.786764781",
                "liter" => " * 0.0147867648"
            ],
            "cup" => [
                "teaspoon" => " * 48",
                "tablespoon" => " * 16",
                "cup" => " * 1",
                "fl_oz_us" => " * 8",
                "fl_oz_uk" => " * 8.3267418463",
                "pint_us" => " * 0.5",
                "pint_uk" => " * 0.4163370923",
                "quart_us" => " * 0.25",
                "quart_uk" => " * 0.2081685462",
                "gallon_us" => " * 0.0625",
                "gallon_uk" => " * 0.0520421365",
                "milliliter" => " * 236.5882365",
                "liter" => " * 0.2365882365"
            ],
            "fl_oz_us" => [
                "teaspoon" => " * 6",
                "tablespoon" => " * 2",
                "cup" => " * 0.125",
                "fl_oz_us" => " * 1",
                "fl_oz_uk" => " * 1.0408427308",
                "pint_us" => " * 0.0625",
                "pint_uk" => " * 0.0520421365",
                "quart_us" => " * 0.03125",
                "quart_uk" => " * 0.0260210683",
                "gallon_us" => " * 0.0078125",
                "gallon_uk" => " * 0.0065052671",
                "milliliter" => " * 29.573529562",
                "liter" => " * 0.0295735296"
            ],
            "fl_oz_uk" => [
                "teaspoon" => " * 5.7645596424",
                "tablespoon" => " * 1.9215198808",
                "cup" => " * 0.1200949926",
                "fl_oz_us" => " * 0.9607599404",
                "fl_oz_uk" => " * 1",
                "pint_us" => " * 0.0600474963",
                "pint_uk" => " * 0.05",
                "quart_us" => " * 0.0300237481",
                "quart_uk" => " * 0.025",
                "gallon_us" => " * 0.007505937",
                "gallon_uk" => " * 0.00625",
                "milliliter" => " * 28.4130625",
                "liter" => " * 0.0284130625"
            ],            
            "pint_us" => [
                "teaspoon" => " * 96",
                "tablespoon" => " * 32",
                "cup" => " * 2",
                "fl_oz_us" => " * 16",
                "fl_oz_uk" => " * 16.653483693",
                "pint_us" => " * 1",
                "pint_uk" => " * 0.8326741846",
                "quart_us" => " * 0.5",
                "quart_uk" => " * 0.4163370923",
                "gallon_us" => " * 0.125",
                "gallon_uk" => " * 0.1040842731",
                "milliliter" => " * 473.176473",
                "liter" => " * 0.473176473"
            ],
            "pint_uk" => [
                "teaspoon" => " * 115.29119285",
                "tablespoon" => " * 38.430397616",
                "cup" => " * 2.401899851",
                "fl_oz_us" => " * 19.215198808",
                "fl_oz_uk" => " * 20",
                "pint_us" => " * 1.2009499255",
                "pint_uk" => " * 1",
                "quart_us" => " * 0.6004749628",
                "quart_uk" => " * 0.5",
                "gallon_us" => " * 0.1501187407",
                "gallon_uk" => " * 0.125",
                "milliliter" => " * 568.26125",
                "liter" => " * 0.56826125"
            ],
            "quart_us" => [
                "teaspoon" => " * 192",
                "tablespoon" => " * 64",
                "cup" => " * 4",
                "fl_oz_us" => " * 32",
                "fl_oz_uk" => " * 33.306967385",
                "pint_us" => " * 2",
                "pint_uk" => " * 1.6653483693",
                "quart_us" => " * 1",
                "quart_uk" => " * 0.8326741846",
                "gallon_us" => " * 0.25",
                "gallon_uk" => " * 0.2081685462",
                "milliliter" => " * 946.352946",
                "liter" => " * 0.946352946"
            ],
            "quart_uk" => [
                "teaspoon" => " * 230.5823857",
                "tablespoon" => " * 76.860795232",
                "cup" => " * 4.803799702",
                "fl_oz_us" => " * 38.430397616",
                "fl_oz_uk" => " * 40",
                "pint_us" => " * 2.401899851",
                "pint_uk" => " * 2",
                "quart_us" => " * 1.2009499255",
                "quart_uk" => " * 1",
                "gallon_us" => " * 0.3002374814",
                "gallon_uk" => " * 0.25",
                "milliliter" => " * 1136.5225",
                "liter" => " * 1.1365225"
            ],
            "gallon_us" => [
                "teaspoon" => " * 768",
                "tablespoon" => " * 256",
                "cup" => " * 16",
                "fl_oz_us" => " * 128",
                "fl_oz_uk" => " * 133.22786954",
                "pint_us" => " * 8",
                "pint_uk" => " * 6.661393477",
                "quart_us" => " * 4",
                "quart_uk" => " * 3.3306967385",
                "gallon_us" => " * 1",
                "gallon_uk" => " * 0.8326741846",
                "milliliter" => " * 3785.411784",
                "liter" => " * 3.785411784"
            ],
            "gallon_uk" => [
                "teaspoon" => " * 922.32954279",
                "tablespoon" => " * 307.44318093",
                "cup" => " * 19.215198808",
                "fl_oz_us" => " * 153.72159046",
                "fl_oz_uk" => " * 160",
                "pint_us" => " * 9.607599404",
                "pint_uk" => " * 8",
                "quart_us" => " * 4.803799702",
                "quart_uk" => " * 4",
                "gallon_us" => " * 1.2009499255",
                "gallon_uk" => " * 1",
                "milliliter" => " * 4546.09",
                "liter" => " * 4.54609"
            ],
            "milliliter" => [
                "teaspoon" => " * 0.2028841362",
                "tablespoon" => " * 0.0676280454",
                "cup" => " * 0.0042267528",
                "fl_oz_us" => " * 0.0338140227",
                "fl_oz_uk" => " * 0.0351950797",
                "pint_us" => " * 0.0021133764",
                "pint_uk" => " * 0.001759754",
                "quart_us" => " * 0.0010566882",
                "quart_uk" => " * 0.000879877",
                "gallon_us" => " * 0.0002641721",
                "gallon_uk" => " * 0.0002199692",
                "milliliter" => " * 1",
                "liter" => " * 0.001"
            ],
            "liter" => [
                "teaspoon" => " * 202.88413621",
                "tablespoon" => " * 67.628045404",
                "cup" => " * 4.2267528377",
                "fl_oz_us" => " * 33.814022702",
                "fl_oz_uk" => " * 35.195079728",
                "pint_us" => " * 2.1133764189",
                "pint_uk" => " * 1.7597539864",
                "quart_us" => " * 1.0566882094",
                "quart_uk" => " * 0.8798769932",
                "gallon_us" => " * 0.2641720524",
                "gallon_uk" => " * 0.2199692483",
                "milliliter" => " * 1000",
                "liter" => " * 1"
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