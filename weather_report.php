<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wather Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class=container>
    <?php
    
    $temperature = 0; 
    $result = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input temperature from the form
        $temperature = $_POST["temperature"];

        $cssClass = ($temperature <= 0) ? 'bg-info' : (($temperature <= 20) ? 'bg-primary' : 'bg-danger');

        // Validate input (numeric)
        if (!is_numeric($temperature)) {
            $result = "Please enter a valid numeric temperature.";
        } else {
            // Provide weather information based on the temperature range
            if ($temperature <= 0) {
                $result = "It's freezing!";
            } elseif ($temperature <= 20) {
                $result = "It's cool.";
            } else {
                $result = "It's warm.";
            }
        }
    }
    ?>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Weather Report</h1>
            
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="temperature" class="form-label">Enter the temperature:</label>
                    <input type="text" name="temperature" 
                        value="<?php echo $temperature; ?>"
                        class="form-control" id="temperature" required>
                </div>                
                <button type="submit" class="btn btn-success">
                    Check Weather
                </button>
            </form>
       
            <div class="card my-2 <?php echo $cssClass; ?>">
                <div class="card-body">
                    <h4 class="text-center"><?php echo $result;  ?></h4>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
