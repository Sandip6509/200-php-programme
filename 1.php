<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program for Addition and Subtraction of two numbers</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form class="row mt-3" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Number 1</span>
                <input type="number" class="form-control" name="number1" value="" placeholder="Enter Number1" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Number 2</span>
                <input type="number" class="form-control" name="number2" value="" placeholder="Enter Number 2" required>
            </div>
            <div class="input-group mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];

            $add = $number1 + $number2;
            $sub = $number1 - $number2;

            echo "Addition =" . $add;
            echo "<hr>";
            echo "Subtraction =" . $sub;
        }
        ?>
    </div>
</body>

</html>