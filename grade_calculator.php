<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <?php
    // Define variables to hold the input test scores and calculated average
    $testScore1 = '';
    $testScore2 = '';
    $testScore3 = '';
    $average = '';
    $grade = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input test scores from the form
        $testScore1 = $_POST["testScore1"];
        $testScore2 = $_POST["testScore2"];
        $testScore3 = $_POST["testScore3"];

        // Validate input test scores (numeric and between 0 and 100)
        if (!is_numeric($testScore1) || !is_numeric($testScore2) || !is_numeric($testScore3) ||
            $testScore1 < 0 || $testScore1 > 100 ||
            $testScore2 < 0 || $testScore2 > 100 ||
            $testScore3 < 0 || $testScore3 > 100) {
            $grade = "Invalid input. Please enter numeric test scores between 0 and 100.";
        } else {
            // Calculate the average of the test scores
            $average = ($testScore1 + $testScore2 + $testScore3) / 3;

            // Determine the corresponding letter grade
            if ($average >= 90) {
                $grade = "A";
            } elseif ($average >= 80) {
                $grade = "B";
            } elseif ($average >= 70) {
                $grade = "C";
            } elseif ($average >= 60) {
                $grade = "D";
            } else {
                $grade = "F";
            }
        }
    }
    ?>
    <div class="row justify-content-md-center">
        <div class="col-md-4">            
        <h2 class="text-center mt-4">Grade Calculator</h2>
        <div class="card">
            <div class="card-header">
            <h4>
                Result: <br>
            Average Score: <?php echo $average ?> <br>
            Letter Grade: <?php echo $grade ?>
            </h4>
               
            </div>
            <div class="card-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                
                <div class="mb-3">
                    <label for="testScore1" class="form-label">
                        Test Score 1:
                    </label>
                    <input type="text" name="testScore1" class="form-control"  id="testScore1" value="<?php echo $testScore1; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="testScore2" class="form-label">
                        Test Score 2:
                    </label>                    
                    <input type="text" name="testScore2" class="form-control" id="testScore2" value="<?php echo $testScore2; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="testScore3" class="form-label">
                        Test Score 3:
                    </label>
                    
                    <input type="text" name="testScore3" id="testScore3" class="form-control" value="<?php echo $testScore3; ?>" required>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    Calculate Grade
                </button>
            </form>
            </div>
        </div>
        </div>
    </div>
    

</body>
</html>
