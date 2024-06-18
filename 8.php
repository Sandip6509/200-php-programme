<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program To find the Volume of a Cylinder</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form class="row mt-3" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Number1</span>
                <input type="text" class="form-control" name="number1" value="" placeholder="Enter the Radius of a Cylinder">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Number2</span>
                <input type="number" class="form-control" name="number2" value="" placeholder="Enter the Height of a Cylinder" required>
            </div>
            <div class="input-group mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $r = $_POST['number1'];
            $h = $_POST['number2'];
            $pi = 3.14;
            $volume = $pi * $r * $r * $h;

            echo "Volume of a Cylinder is: ".$volume;
        }
        ?>
    </div>
</body>

</html>