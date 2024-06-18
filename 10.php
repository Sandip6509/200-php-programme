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
                <span class="input-group-text" id="inputGroup-sizing-default">principal</span>
                <input type="number" class="form-control" name="number1" value="" placeholder="Enter principal" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Time Period</span>
                <input type="number" class="form-control" name="number2" value="" placeholder="Enter time period" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Rate Of Interest</span>
                <input type="number" class="form-control" name="number3" value="" placeholder="Enter rate of interest" required>
            </div>
            <div class="input-group mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $p = $_POST['number1'];
            $t = $_POST['number2'];
            $r = $_POST['number3'];

            //Simple Interest formula
            $si = $p*$t*$r/100;
            echo "Simple interest = ".$si;

            //Compound Interest formula
            $amount = $p * pow((1 + $r/100),$t);
            $ci = $amount - $p;
            echo "Compound interest = ".$ci ;
            return 0;
        }
        ?>
    </div>
</body>

</html>