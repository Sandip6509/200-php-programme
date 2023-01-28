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
                <span class="input-group-text" id="inputGroup-sizing-default">Mass of an object</span>
                <input type="number" class="form-control" name="number1" value="" placeholder="Enter Mass of an object" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Displacement of an object</span>
                <input type="number" class="form-control" name="number2" value="" placeholder="Enter Displacement of an object" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Velocity of an object</span>
                <input type="number" class="form-control" name="number3" value="" placeholder="Enter Velocity of an object" required>
            </div>
            <div class="input-group mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $m = $_POST['number1'];
            $h = $_POST['number2'];
            $v = $_POST['number3'];

            $P = $m * 9.8 * $h; //To calculate Potential energy(P.E = mgh)
            $K = 0.5 * $m * $v * $v; //To calculate Kinetic energy(K.E = 1/2mv^2)
            $Me = $P + $K; //To calculate Mechanical energy(M.E = P.E+K.E)
            echo "Potential energy = " . $P . "J";
            echo "<br>Kinetic energy = " . $K . "J";
            echo "<br>Mechanical energy = " . $Me . "J";
            return 0;
        }
        ?>
    </div>
</body>

</html>