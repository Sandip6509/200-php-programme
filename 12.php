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
                <span class="input-group-text" id="inputGroup-sizing-default">Seconds</span>
                <input type="number" class="form-control" name="number1" value="" placeholder="Enter how many seconds" required>
            </div>
            <div class="input-group mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $s = $_POST['number1'];
            $h = $s / 3600; // To convert seconds into hours
            $m = $s / 60; // To convert seconds into minutes
            $precision = 3;

            echo $s . " seconds = " . number_format($h, $precision) . " hour<br>";
            echo $s . " seconds = " . number_format($m, $precision) . " minutes";
            return 0;
        }
        ?>
    </div>
</body>

</html>