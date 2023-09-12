<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <?php
    // Define variables to hold the input number and result message
    $number = '';
    $result = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input number from the form
        $number = $_POST["number"];

        // Validate input (numeric)
        if (!is_numeric($number)) {
            $result = "Please enter a valid numeric value.";
        } else {
            // Check if the number is even or odd
            if ($number % 2 == 0) {
                $result = "$number is even.";
            } else {
                $result = "$number is odd.";
            }
        }
    }
    ?>
    <div class="row justify-content-md-center">
        <div class="col-md-4">            
        <h2 class="text-center mt-4">Even or Odd Checker</h2>
            <div class="card">
                <div class="card-header">
                    <h4>
                        Result : <?php echo $result?>
                    </h4>               
                </div>
                <div class="card-body">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="number" class="form-label">
                            Enter a number:
                        </label>
                        <input type="text" name="number" class="form-control"  id="number" value="<?php echo $number; ?>" required>
                    </div>                
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>
