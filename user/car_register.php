<?php

include '../includes/connection.php';

if (!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $bg = $_SESSION['bg'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container my-3 col-lg-5">

        <?php
        if (!empty($_SESSION['message'])) :
        ?>
            <div class="alert alert-<?= $bg ?> alert-dismissible fade show" role="alert">
                <?= $message ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            unset($_SESSION['message']);
            unset($_SESSION['bg']);
        endif ?>

        <!-- Car Registration -->
        <form action="../config/car_register.php" method="post">

            <h1 class="mb-3"> Car Registration </h1>
            <hr>

            <h4> Office Details </h4>
            <div class="row">
                <div class="mb-3 col-8">
                    <label for="field_office" class="form-label"> Field Office <span class="text-danger">*</span></label>
                    <input type="text" name="field_office" id="field_office" class="form-control" required>
                </div>
                <div class="mb-3 col-4">
                    <label for="office_code" class="form-label">Field Office Code<span class="text-danger">*</span></label>
                    <input type="text" name="office_code" id="office_code" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label for="plate_no" class="form-label"> Receipt No. <span class="text-danger">*</span></label>
                    <input type="text" name="plate_no" id="plate_no" class="form-control" required>
                </div>
                <div class="mb-3 col-6">
                    <label for="model" class="form-label">TIN<span class="text-danger">*</span></label>
                    <input type="text" name="model" id="model" class="form-control" required>
                </div>
            </div>



            <br>
            <h4> Car Details </h4>



            <div class="row">
                <div class="mb-3 col-4">
                    <label for="plate_no" class="form-label">Car Plate No. <span class="text-danger">*</span></label>
                    <input type="text" name="plate_no" id="plate_no" class="form-control" required placeholder="XXX-9999" minlength="9" maxlength="9">
                </div>
                <div class="mb-3 col-4">
                    <label for="model" class="form-label">Car Model <span class="text-danger">*</span></label>
                    <input type="text" name="model" id="model" class="form-control" required>
                </div>
                <div class="mb-3 col-4">
                    <label for="color" class="form-label">Car Color <span class="text-danger">*</span></label>
                    <input type="text" name="color" id="color" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-4">
                    <label for="brand" class="form-label">Car Brand <span class="text-danger">*</span></label>
                    <input type="text" name="brand" id="brand" class="form-control" required>
                </div>

                <div class="mb-3 col-4">
                    <label for="classification" class="form-label">Car Classification <span class="text-danger">*</span></label>
                    <input type="text" name="classification" id="classification" class="form-control" required>
                </div>

                <div class="mb-3 col-4">
                    <label for="engine" class="form-label">Car Engine No <span class="text-danger">*</span></label>
                    <input type="text" name="engine" id="engine" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-4">
                    <label for="chassis" class="form-label">Car Chassis No <span class="text-danger">*</span></label>
                    <input type="text" name="chassis" id="chassis" class="form-control" required>
                </div>

                <div class="mb-3 col-4">
                    <label for="car_year" class="form-label">Car Year <span class="text-danger">*</span></label>
                    <input type="text" name="car_year" id="car_year" class="form-control" required>
                </div>

                <div class="mb-3 col-4">
                    <label for="car_type" class="form-label">Car Type <span class="text-danger">*</span></label>
                    <input type="text" name="car_type" id="car_type" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-4">
                    <label for="car_category" class="form-label">Car Category <span class="text-danger">*</span></label>
                    <input type="text" name="car_category" id="car_category" class="form-control" required>
                </div>

                <div class="mb-3 col-4">
                    <label for="car_fuel" class="form-label">Car Fuel <span class="text-danger">*</span></label>
                    <input type="text" name="car_fuel" id="car_fuel" class="form-control" required>
                </div>

                <div class="mb-3 col-4">
                    <label for="car_renewal" class="form-label">Car Renewal Date <span class="text-danger">*</span></label>
                    <input type="date" name="car_renewal" id="car_renewal" class="form-control" required>
                </div>
            </div>

            <div class="col">
                <input type="submit" name="register" value="Register" class="btn btn-primary">
                <a href="profile.php" class="btn btn-warning"> Back </a>
            </div>

        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>