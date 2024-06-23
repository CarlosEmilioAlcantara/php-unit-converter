<?php
    // Importing
    include("../functions/construct-values.php");
    include("../functions/reset-values.php");
    include("../converters/converter.php");

    // All values possible in form
    $values = array("sq_km", "sq_meter", "sq_cm", "hectare", "sq_mile",
                    "sq_yard", "sq_foot", "sq_inch", "acre");

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
    $x_unit_header = "Sq. Kilometer";
    $x_sq_km_checked = "checked";
    $y_unit_header = "Sq. Kilometer";
    $y_sq_km_checked = "checked";

    $units = array("Sq. Kilometer", "Sq. Meter", "Sq. Centimeter", "Hectare",
                   "Sq. Mile", "Sq. Yard", "Sq. Foot", "Sq. Inch", "Acre"
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
            "sq_km" => [
                "sq_km" => " * 1",
                "sq_meter" => " * 1000000",
                "sq_cm" => " * 10000000000",
                "hectare" => " * 100",
                "sq_mile" => " * 0.386102",
                "sq_yard" => " * 1195990.046301",
                "sq_foot" => " * 1000000 * 10.76391",
                "sq_inch" => " * 1550003100.0062",
                "acre" => " * 247.105381"
            ],
            "sq_meter" => [
                "sq_km" => " / 1000000",
                "sq_meter" => " * 1",
                "sq_cm" => " * 10000",
                "hectare" => " / 10000",
                "sq_mile" => " / 2589988.11",
                "sq_yard" => " * 1.19599",
                "sq_foot" => " * 10.76391",
                "sq_inch" => " * 1550.0031",
                "acre" => " * 0.000247105"
            ],
            "sq_cm" => [
                "sq_km" => " / 10000000000",
                "sq_meter" => " / 10000",
                "sq_cm" => " * 1",
                "hectare" => " / 100000000",
                "sq_mile" => " * 0.00000000003861",
                "sq_yard" => " * 0.00012",
                "sq_foot" => " * 0.001076",
                "sq_inch" => " * 0.155",
                "acre" => " * 0.000000024711"
            ],
            "hectare" => [
                "sq_km" => " * 100",
                "sq_meter" => " * 10000",
                "sq_cm" => " * 100000000",
                "hectare" => " * 1",
                "sq_mile" => " * 0.003861",
                "sq_yard" => " * 11959.900463",
                "sq_foot" => " * 107639.104167",
                "sq_inch" => " / 0.000000064516",
                "acre" => " * 2.4711"
            ],
            "sq_mile" => [
                "sq_km" => " * 2.589988",
                "sq_meter" => " * 2589988.110336",
                "sq_cm" => " * 25899881103.36",
                "hectare" => " * 258.998811",
                "sq_mile" => " * 1",
                "sq_yard" => " * 3097600",
                "sq_foot" => " * 27878400",
                "sq_inch" => " * 4014489600",
                "acre" => " * 640"
            ],
            "sq_yard" => [
                "sq_km" => " * 0.0000008361",
                "sq_meter" => " * 0.836127",
                "sq_cm" => " * 8361.27",
                "hectare" => " * 0.0000836127",
                "sq_mile" => " * 0.000000322831",
                "sq_yard" => " * 1",
                "sq_foot" => " * 9",
                "sq_inch" => " * 1296",
                "acre" => " * 4840"
            ],
            "sq_foot" => [
                "sq_km" => " * 0.000000092903",
                "sq_meter" => " * 0.092903",
                "sq_cm" => " * 929.0304",
                "hectare" => " * 0.0000092903",
                "sq_mile" => " * 0.0000000358701",
                "sq_yard" => " / 9",
                "sq_foot" => " * 1",
                "sq_inch" => " * 144",
                "acre" => " * 0.0000229568"
            ],
            "sq_inch" => [
                "sq_km" => " * 0.00000000064516",
                "sq_meter" => " * 0.00064516",
                "sq_cm" => " * 6.4516",
                "hectare" => " * 0.000000064516",
                "sq_mile" => " * 0.0000000002491",
                "sq_yard" => " * 0.000771605",
                "sq_foot" => " * 0.00694444",
                "sq_inch" => " * 1",
                "acre" => " * 0.000000159423"
            ],
            "acre" => [
                "sq_km" => " * 0.00404686",
                "sq_meter" => " * 4046.86",
                "sq_cm" => " * 40470000",
                "hectare" => " * 0.404686",
                "sq_mile" => " * 0.00156",
                "sq_yard" => " * 4840.006363",
                "sq_foot" => " * 43560",
                "sq_inch" => " * 6273000",
                "acre" => " * 1"
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