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
                <span class="input-group-text" id="inputGroup-sizing-default">Temperature in fahrenheit</span>
                <input type="text" class="form-control" name="num" value="" placeholder="Enter temperature in fahrenheit" required>
            </div>
            <div class="input-group mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $f = $_POST['num'];
            $a = $f - 32;
            $g = (5 * $a) / 9;
            echo " Temperature in degree celsius = " . $g;
            return 0;
        }
        ?>
    </div>
</body>

</html>