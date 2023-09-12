<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

    <?php
    // Define variables to hold the input temperature and conversion direction
    $temperature = '';
    $conversion = '';
    $result = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input values from the form
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];

        // Validate input temperature
        if (!is_numeric($temperature)) {
            $result = "Please enter a valid numeric temperature.";
        } else {
            // Perform temperature conversion based on the selected direction
            if ($conversion == "celsius_to_fahrenheit") {
                $result = ($temperature * 9/5) + 32;
            } elseif ($conversion == "fahrenheit_to_celsius") {
                $result = ($temperature - 32) * 5/9;
            }
        }
    }
    ?>
<div class="row justify-content-center">
    <div class="col-md-8">
    <h1 class="text-center">Temperature Converter</h1>
    
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
                <label for="temperature" class="form-label">Temperature</label>
                <input type="text" name="temperature"
                    class="form-control" id="temperature">
            </div>  
            <div class="form-check">
                <input class="form-check-input" type="radio" 
                name="conversion" id="flexRadioDefault1" checked
                value="celsius_to_fahrenheit" <?php if ($conversion == "celsius_to_fahrenheit") echo "checked"; ?>>

                <label class="form-check-label" for="flexRadioDefault1">
                    Celsius to Fahrenheit
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" 
                name="conversion" id="flexRadioDefault2" 
                value="fahrenheit_to_celsius" <?php if ($conversion == "fahrenheit_to_celsius") echo "checked"; ?> >
                <label class="form-check-label" for="flexRadioDefault2">
                    Fahrenheit to Celsius
                </label>
            </div>
            <button type="submit" class="btn btn-success">Convert</button>
        </form>

    
    <?php
    // Display the result if available
    if ($result !== '') {
        $original_unit = ($conversion == "celsius_to_fahrenheit") ? "Celsius" : "Fahrenheit";
        $converted_unit = ($conversion == "celsius_to_fahrenheit") ? "Fahrenheit" : "Celsius";
        echo "<div class=\"card my-2\">
            <div class=\"card-body\">
                <p class=\"text-center\">$temperature $original_unit is $result $converted_unit.</p>
            </div>
        </div>";
    }
    ?>
        </div>
    </div>
</body>
</html>
