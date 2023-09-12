<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
    // Define variables to hold the input numbers and result
    $number1 = '';
    $number2 = '';
    $largerNumber = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input numbers from the form
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Validate input (numeric)
        if (!is_numeric($number1) || !is_numeric($number2)) {
            $result = "Please enter valid numeric values.";
        } else {
            // Use the ternary operator to determine the larger number
            $largerNumber = ($number1 > $number2) ? $number1 : $number2;
        }
    }
    ?>
    <div class="row justify-content-md-center">
        <div class="col-md-4">            
            <h2 class="text-center mt-4">Comparison Tool</h2>
            <div class="card">
                <div class="card-header">
                    <h4>
                    The larger number is: <?php echo $largerNumber ?>
                    </h4>
                </div>
                <div class="card-body">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="number1" class="form-label">
                            Enter the first number
                        </label>                        
                        <input type="text" name="number1" id="number1" value="<?php echo $number1; ?>" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="number2" class="form-label">
                            Enter the second number
                        </label>  
                        <input type="text" name="number2" id="number2" value="<?php echo $number2; ?>" class="form-control" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        Compare Numbers
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
