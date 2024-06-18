<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program To find Area and Perimeter of a Square</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form class="row mt-3" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Number</span>
                <input type="number" class="form-control" name="number1" value="" placeholder="Enter length of square side" required>
            </div>
            <div class="input-group mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $number = $_POST['number1'];

            $area  = $number * $number;
            $perimeter = 4 * $number;

            echo "Area of square " . $number . " is " . " = " . $area;
            echo "<br>";
            echo "Perimeter of square " . $number . " is " . " = " . $perimeter;
        }
        ?>
    </div>
</body>

</html>