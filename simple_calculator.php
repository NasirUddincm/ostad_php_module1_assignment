<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
    $number1 = '';
    $number2 = '';
    $operation = '';
    $result = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input numbers and operation from the form
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];

        // Validate input (numeric)
        if (!is_numeric($number1) || !is_numeric($number2)) {
            $result = "Please enter valid numeric values.";
        } else {
            // Perform the selected operation
            switch ($operation) {
                case "addition":
                    $result = $number1 + $number2;
                    break;
                case "subtraction":
                    $result = $number1 - $number2;
                    break;
                case "multiplication":
                    $result = $number1 * $number2;
                    break;
                case "division":
                    if ($number2 == 0) {
                        $result = "Division by zero is not allowed.";
                    } else {
                        $result = $number1 / $number2;
                    }
                    break;
                default:
                    $result = "Invalid operation selected.";
            }
        }
    }
    ?>
    <div class="row justify-content-md-center">
        <div class="col-md-4">            
        <h2 class="text-center mt-4">Simple Calculator</h2>

            <div class="card">
                <div class="card-header text-center">
                    <h4>
                        Result: <?php echo $result?>
                    </h4>                
                </div>
                <div class="card-body">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="number1" class="form-label">
                            First Number
                        </label>
                        
                        <input type="text" name="number1" class="form-control" id="number1" value="<?php echo $number1; ?>" required>
                    </div>
  
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Select operation</label>
                        <select name="operation" id="operation" class="form-control">
                            <option value="addition" <?php if ($operation === "addition") echo "selected"; ?>>Addition (+)</option>

                            <option value="subtraction" <?php if ($operation === "subtraction") echo "selected"; ?>>Subtraction (-)</option>

                            <option value="multiplication" <?php if ($operation === "multiplication") echo "selected"; ?>>Multiplication (*)</option>

                            <option value="division" <?php if ($operation === "division") echo "selected"; ?>>Division (/)</option>

                        </select>
                    </div>
  
                    <div class="mb-3">
                        <label for="number2" class="form-label">
                            Second Number
                        </label>                        
                        <input type="text" name="number2" class="form-control" id="number2" value="<?php echo $number2; ?>" required>
                    </div>
  
                    <button type="submit" class="btn btn-primary">
                        Calculate
                    </button>
                </form>
                </div>
            </div>
        
        </div>
    </div>
</body>
</html>
