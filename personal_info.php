<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

    <?php
    // Define variables for personal information
    $name = "Nasir Uddin";
    $age = 30;
    $profession = "Fullstack Web Developer";
    $country = "Bangladesh";
    $introduction = "Hello, I'm {$name}. I'm a {$profession} and I'm from the tongi {$country}.";
    ?>

    <div class="row justify-content-md-center">
        <div class="col-md-4">            
            <h2 class="text-center mt-4">Personal Information</h2>
            <div class="card">
                <div class="card-header">
                    <h4>Personal Information</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Name:</strong> <?php echo $name ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Age:</strong> <?php echo $age ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Profession:</strong> <?php echo $profession ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Country:</strong> <?php echo $country ?>
                        </li>
                        
                    </ul>
                    <p class="mt-3">
                       <strong> Introduce my self:</strong> <?php echo $introduction ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
                

</body>
</html>
